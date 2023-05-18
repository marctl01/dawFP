<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'unidad_formativa_id',
        'titulo',
        'descripcion',
        'puntuacion',
    ];

    // Relación con Usuario
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con UnidadFormativa
    public function unidadFormativa()
    {
        return $this->belongsTo(UnidadFormativa::class);
    }
}
