<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;

    protected $table = 'espacios';
    // Define los campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'descripcion',
        'capacidad',
        'ubicacion',
    ];
}