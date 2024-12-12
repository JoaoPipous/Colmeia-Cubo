<?php

namespace App\Livewire\Panel\AreaFuncional;

use App\Models\AreaDeConhecimento;
use App\Models\AreaFuncional;
use Livewire\Component;

class Create extends Component
{
    public $nome;

    public $description;

    public $acs;

    public $selectedAc;

    public function mount($id = null)
    {
        $this->acs = AreaDeConhecimento::all();

        if ($id) {
            $this->selectedAc = $id;
        } else {
            $this->selectedAc = $this->acs->first()->id;
        }
    }

    public function store()
    {
        $ac = AreaDeConhecimento::find($this->selectedAc);

        $this->validate([
            'nome' => 'required'
        ]);

        try {
            $ac->areasFuncionais()->create([
                'name' => $this->nome,
                'description' => $this->description
            ]);

            return redirect()->route('af.index')->with('success', 'Área Funcional criada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('af.index')->with('error', 'Erro ao criar a área funcional.');
        }
    }

    public function render()
    {
        return view('livewire.panel.area-funcional.create')->extends('layouts.panel');
    }
}
