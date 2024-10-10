<?php

namespace App\Models;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Depto extends Model
{
    use HasFactory;

    public function carreras()
    {
        return $this->hasMany(Carrera::class);
    }
    

    protected $fillable = [
        'idDepto',
        'nombreDepto',
        'nombreMediano',
        'nombreCorto',
    ];
    
}
