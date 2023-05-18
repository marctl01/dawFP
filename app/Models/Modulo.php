<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    // Relación con UnidadFormativa
    public function unidadesFormativas()
    {
        return $this->hasMany(UnidadFormativa::class);
    }
}
