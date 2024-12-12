<?php

namespace App\Livewire\Panel\UnidadeCurricular;

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

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        $uc = UnidadeCurricular::where('id', $id)->first();

        $uc->delete();
    }

    public function toggleStatus($id)
    {
        $uc = UnidadeCurricular::where('id', $id);

        $uc->status = !$uc->status;
        $uc->save();
    }


    public function render()
    {
        if ($this->id) {
            $ucs = UnidadeCurricular::where('area_funcional_id', $this->id)->paginate(5);
        } else {
            $ucs = UnidadeCurricular::where('name', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(5);
        }

        return view(
            'livewire.panel.unidade-curricular.index',
            [
                'ucs' => $ucs
            ]
        )->extends('layouts.panel');
    }
}
