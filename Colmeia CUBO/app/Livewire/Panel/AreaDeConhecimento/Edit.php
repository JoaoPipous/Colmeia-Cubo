<?php

namespace App\Livewire\Panel\AreaDeConhecimento;

use App\Models\AreaDeConhecimento;
use App\Models\Curso;
use Livewire\Component;

class Edit extends Component
{

    public $color;

    public $name;

    public $description;

    public $cursos;

    public $curso;

    public $areaDeConhecimento;

    public function mount($id)
    {
        $this->cursos = Curso::all();
        $this->areaDeConhecimento = AreaDeConhecimento::find($id);

        $this->name = $this->areaDeConhecimento->name;
        $this->description = $this->areaDeConhecimento->description;
        $this->color = $this->areaDeConhecimento->color;
        $this->curso = $this->areaDeConhecimento->curso_id;
    }

    public function edit()
    {

        $this->validate([
            'name' => 'required',
            'color' => 'required'
        ]);

        $this->areaDeConhecimento->update([
            'name' => $this->name,
            'description' => $this->description,
            'color' => $this->color,
            'curso_id' => $this->curso
        ]);

        return redirect()->route('ac.index')->with('success', 'Área de conhecimento atualizada com sucesso!');
    }

    public function render()
    {
        return view('livewire.panel.area-de-conhecimento.edit')->extends('layouts.panel');
    }
}
