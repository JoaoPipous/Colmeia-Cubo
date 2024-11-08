<?php

namespace App\Livewire\Panel\AreaDeConhecimento;

use App\Models\AreaDeConhecimento;
use App\Models\Curso;
use App\Models\PivotAcUc;
use App\Models\UnidadeCurricular;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

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

    public function toggleStatus($id)
    {
        $ac = AreaDeConhecimento::find($id);

        $ac->status = !$ac->status;
        $ac->save();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        $ac = AreaDeConhecimento::find($id)->first();

        $ac->delete();
    }

    public function render()
    {
        if ($this->id) {
            $acs = AreaDeConhecimento::where('curso_id', $this->id)->paginate(5);
        } else {
            $acs = AreaDeConhecimento::where('name', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(5);
        }

        return view(
            'livewire.panel.area-de-conhecimento.index',
            [
                'acs' => $acs,
            ]
        )->extends('layouts.panel');
    }
}
