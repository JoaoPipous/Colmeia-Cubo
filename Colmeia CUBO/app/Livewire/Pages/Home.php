<?php

namespace App\Livewire\Pages;

use App\Models\AreaFuncional;
use App\Models\Curso;
use App\Models\UnidadeCurricular;
use Livewire\Component;

class Home extends Component
{
    public $cursos;

    public $curso;

    public $modal = false;

    public $modalAF;

    public $selectedCurso = 1;

    public $areasDeConhecimento = [];

    public $unidadesCurriculares;

    public $ucs;

    public function mount($curso = null)
    {
        $this->cursos = Curso::all();

        if ($curso) {
            $this->selectedCurso = str_replace('_', ' ', $curso);
            $this->curso = Curso::where('name', $this->selectedCurso)->first();

            foreach ($this->curso->areasDeConhecimento as $areaDeConhecimento) {

                $areaColor = $areaDeConhecimento->color;
                $areaName = $areaDeConhecimento->name;


                foreach ($areaDeConhecimento->areasFuncionais as $areaFuncional) {

                    $duration = 0;

                    foreach ($areaFuncional->unidadesCurriculares as $unidadeCurricular) {
                        $duration += $unidadeCurricular->duration;
                    }

                    $this->areasDeConhecimento[] = [
                        'id' => $areaFuncional->id,
                        'area_de_conhecimento' => $areaName,
                        'unidade_curricular' => $areaFuncional->name,
                        'unidade_duration' => $duration,
                        'cor' => $areaColor
                    ];
                }
            };

            $this->dispatch('cursoChanged');
        }
    }

    public function updatedSelectedCurso()
    {
        $this->selectedCurso = str_replace(' ', '_', $this->selectedCurso);

        return redirect()->route('home', ['curso' => $this->selectedCurso]);
    }

    public function getAF($id)
    {
        $this->modalAF = AreaFuncional::where('id', $id)->first();

        $this->ucs = $this->modalAF->unidadesCurriculares;

        $this->modal = true;
    }

    public function render()
    {
        return view('livewire.pages.home')->extends('layouts.app');
    }
}
