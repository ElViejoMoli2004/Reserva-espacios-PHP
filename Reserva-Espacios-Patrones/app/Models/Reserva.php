<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';


    protected $fillable = [
        'usuario_id',
        'espacio_id',
        'fecha_inicio',
        'fecha_fin',
    ];

    
    public function espacio(){
        return $this->belongsTo(Eventos::class);
    }


}
