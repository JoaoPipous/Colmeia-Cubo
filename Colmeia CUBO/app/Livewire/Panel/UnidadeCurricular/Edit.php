<?php

namespace App\Livewire\Panel\UnidadeCurricular;

use App\Models\AreaFuncional;
use App\Models\UnidadeCurricular;
use Livewire\Component;

class Edit extends Component
{
    public $name, $description, $duration, $afs, $af, $unidadeCurricular;

    public function mount($id)
    {
        $this->afs = AreaFuncional::all();

        $this->unidadeCurricular = UnidadeCurricular::where('id', $id)->first();

        $this->name = $this->unidadeCurricular->name;
        $this->description = $this->unidadeCurricular->description;
        $this->duration = $this->unidadeCurricular->duration;
        $this->af = $this->unidadeCurricular->area_funcional_id;
    }

    public function edit()
    {
        $this->unidadeCurricular->name = $this->name;
        $this->unidadeCurricular->description = $this->description;
        $this->unidadeCurricular->duration = $this->duration;
        $this->unidadeCurricular->area_funcional_id = $this->af;
        $this->unidadeCurricular->save();

        return redirect()->route('ucs.index')->with('success', 'Unidade Curricular atualizada com sucesso!');
    }

    public function render()
    {
        return view('livewire.panel.unidade-curricular.edit')->extends('layouts.panel');
    }
}
