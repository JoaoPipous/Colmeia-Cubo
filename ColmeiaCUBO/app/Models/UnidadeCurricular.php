<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadeCurricular extends Model
{
    use HasFactory;

    protected $fillable = ['area_funcional_id', 'name', 'description', 'duration', 'status'];

    public function areaFuncional()
    {
        return $this->belongsTo(AreaFuncional::class);
    }
}
