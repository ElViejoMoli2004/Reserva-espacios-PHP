<?php

namespace App\Commands;

use App\Models\Reserva;


class CrearReservaCommand
{
    private $usuarioId;
    private $espacioId;
    private $fechaInicio;
    private $fechaFin;
    private $reserva;

    public function __construct($usuarioId, $espacioId, $fechaInicio, $fechaFin)
    {
        $this->usuarioId = $usuarioId;
        $this->espacioId = $espacioId;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
    }

    public function ejecutar()
    {
        
        $this->reserva = new Reserva();
        $this->reserva->usuario_id = $this->usuarioId;
        $this->reserva->espacio_id = $this->espacioId;
        $this->reserva->fecha_inicio = $this->fechaInicio;
        $this->reserva->fecha_fin = $this->fechaFin;
        $this->reserva->save();

        return $this->reserva; 
    }
}

