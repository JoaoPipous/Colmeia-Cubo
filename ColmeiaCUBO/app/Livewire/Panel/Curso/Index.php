<?php

namespace App\Livewire\Panel\Curso;

use App\Models\Curso;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $name;

    public $description;

    public $search;

    public function delete($id)
    {
        Curso::where('id', $id)->delete();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function toggleStatus($id)
    {
        $curso = Curso::find($id);

        $curso->status = !$curso->status;
        $curso->save();
    }

    public function render()
    {

        $cursos = Curso::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('duration', 'like', '%' . $this->search . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view(
            'livewire.panel.curso.index',
            ['cursos' => $cursos]
        )->extends('layouts.panel');
    }
}
