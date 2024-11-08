<?php

namespace App\Livewire\Panel\UnidadeCurricular;

use App\Models\AreaDeConhecimento;
use App\Models\AreaFuncional;
use App\Models\Curso;
use App\Models\UnidadeCurricular;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Create extends Component
{
    public $afs;

    public $name;

    public $search;

    public $areaFuncional;

    public $selectedAfs = [];

    public $duration;

    public $description;

    public function mount($id = null)
    {
        if ($id) {
            $this->selectAf(AreaFuncional::where('id', $id)->first());
        }

        if (AreaDeConhecimento::all()->isEmpty()) {
            return redirect()->route('af.index')->with('error', 'Você precisa criar uma AC antes de criar uma unidade curricular!');
        }

        $this->afs = AreaFuncional::all();

        $this->areaFuncional = $this->afs->first()->id;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'duration' => 'required',
            'selectedAfs' => 'required'
        ]);

        try {

            foreach ($this->selectedAfs as $af) {

                $selectedAf = AreaFuncional::where('id', $af)->first();

                $selectedAf->unidadesCurriculares()->create([
                    'name' => $this->name,
                    'description' => $this->description,
                    'duration' => $this->duration,
                ]);

                $curso = $selectedAf->areaDeConhecimento()->first()->curso()->first();

                $curso->update(['duration' => $curso->duration + $this->duration]);
            }



            return redirect()->route('ucs.index')->with('success', 'Unidade Curricular criada com sucesso!');
        } catch (\Exception $e) {
            DB::rollBack();

            dd($e);

            return redirect()->route('ucs.index')->with('error', 'Erro ao criar a unidade curricular.');
        }
    }

    public function updatedSearch()
    {
        $this->afs = AreaFuncional::where('name', 'like', '%' . $this->search . '%')->limit(5)->get();
    }

    public function selectAf(AreaFuncional $af)
    {
        if ($this->selectedAfs && in_array($af->id, $this->selectedAfs)) {

            $item = array_search($af->id, $this->selectedAfs);

            unset($this->selectedAfs[$item]);

            return;
        }

        $this->selectedAfs[] = $af->id;
    }

    public function render()
    {
        return view('livewire.panel.unidade-curricular.create')->extends('layouts.panel');
    }
}
