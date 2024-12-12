<?php

namespace App\Livewire\Panel\AreaFuncional;

use App\Models\AreaDeConhecimento;
use App\Models\AreaFuncional;
use Livewire\Component;

class Edit extends Component
{
    public $nome;

    public $description;

    public $acs;

    public $selectedAc;

    public $areaFuncional;

    public function mount($id)
    {
        $this->acs = AreaDeConhecimento::all();
        $this->areaFuncional = AreaFuncional::where('id', $id)->first();
        $this->selectedAc = $this->areaFuncional->area_de_conhecimento_id;
        $this->nome = $this->areaFuncional->name;
        $this->description = $this->areaFuncional->description;
    }

    public function edit()
    {
        $this->validate([
            'nome' => 'required'
        ]);

        try {

            $this->areaFuncional->update([
                'name' => $this->nome,
                'description' => $this->description,
                'area_de_conhecimento_id' => $this->selectedAc
            ]);

            return redirect()->route('af.index')->with('success', 'Área Funcional atualizada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('af.index')->with('error', 'Erro ao atualizar a área funcional.');
        }
    }

    public function render()
    {
        return view('livewire.panel.area-funcional.edit')->extends('layouts.panel');
    }
}
