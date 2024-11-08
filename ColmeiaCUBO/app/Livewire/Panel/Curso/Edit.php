<?php

namespace App\Livewire\Panel\Curso;

use App\Models\Curso;
use Livewire\Component;

class Edit extends Component
{
    public $name;

    public $description;

    public $curso;

    public function mount($id)
    {
        $this->curso = Curso::where('id', $id)->first();

        $this->name = $this->curso->name;
        $this->description = $this->curso->description;
    }

    public function edit()
    {
        $this->validate([
            'name' => 'required',
        ]);

        $this->curso->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        return redirect()->route('cursos.index')->with('success', 'Curso atualizado com sucesso.');
    }

    public function render()
    {
        return view('livewire.panel.curso.edit')->extends('layouts.panel');
    }
}
