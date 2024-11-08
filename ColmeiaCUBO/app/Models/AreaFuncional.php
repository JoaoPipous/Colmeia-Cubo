<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaFuncional extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'area_de_conhecimento_id'];

    public function unidadesCurriculares()
    {
        return $this->hasMany(UnidadeCurricular::class);
    }

    public function areaDeConhecimento()
    {
        return $this->belongsTo(AreaDeConhecimento::class);
    }
}
