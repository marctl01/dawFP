<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadFormativa extends Model
{
    use HasFactory;

    protected $fillable = [
        'modulo_id',
        'nombre',
    ];

    // Relación con Modulo
    public function modulo()
    {
        return $this->belongsTo(Modulo::class);
    }
}
