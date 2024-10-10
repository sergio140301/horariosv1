<?php

namespace App\Models;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carrera extends Model
{
    use HasFactory;


    public function alumnos()
    {
        return $this->hasMany(Alumno::class);
    }
    
    // Define la relación con Departamento
    public function depto(): BelongsTo
    {
        return $this->belongsTo(Depto::class, 'depto_id');
    }
    protected $fillable = [
        'idCarrera',
        'nombreCarrera',
        'nombreMediano',
        'nombreCorto',
        'depto_id',
    ];
}
