<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    // Relación con Usuario (relación uno a muchos inversa)
    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}