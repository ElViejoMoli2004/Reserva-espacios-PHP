<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;

    protected $table = 'espacios';

    public $timestamps = false;

    public function reserva() {
        return $this->hasOne(Reserva::class, 'espacio_id', 'id'); 
    }

    
    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'espacio_id'); 
    }

    
}
