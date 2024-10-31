<?php

namespace App\Mail;

use App\Models\Reserva;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservaCreadaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $reserva;

    public function __construct(Reserva $reserva)
    {
        $this->reserva = $reserva;
    }

    public function build()
    {
        return $this->view('emails.reserva_creada')
                    ->with([
                        'usuario' => $this->reserva->usuario->nombre,
                        'fechaInicio' => $this->reserva->fecha_inicio,
                        'fechaFin' => $this->reserva->fecha_fin,
                    ]);
    }
}
