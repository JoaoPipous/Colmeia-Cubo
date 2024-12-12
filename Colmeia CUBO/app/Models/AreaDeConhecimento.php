<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaDeConhecimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso_id',
        'name',
        'description',
        'color',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function areasFuncionais()
    {
        return $this->hasMany(AreaFuncional::class);
    }
}
