<?php

namespace App\Livewire\Panel\AreaFuncional;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AreaFuncional;

class Index extends Component
{
    use WithPagination;

    public $search;

    public $id;

    public function mount($id = null)
    {
        if ($id) {
            $this->id = $id;
        }
    }

    public function delete($id)
    {
        $af = AreaFuncional::where('id', $id)->first();

        $af->delete();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->id) {
            $afs = AreaFuncional::where('area_de_conhecimento_id', $this->id)->paginate(5);
        } else {
            $afs = AreaFuncional::where('name', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(5);
        }

        return view(
            'livewire.panel.area-funcional.index',
            ['afs' => $afs]
        )->extends('layouts.panel');
    }
}
