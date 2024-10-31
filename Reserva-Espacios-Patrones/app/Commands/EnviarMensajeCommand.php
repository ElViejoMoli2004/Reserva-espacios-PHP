<?php


namespace App\Commands;

use App\Models\Reserva; 
use App\Services\EmailService;

class EnviarMensajeCommand
{
    private $destinatario;
    private $reserva;

    public function __construct($destinatario, Reserva $reserva) 
    {
        $this->destinatario = $destinatario;
        $this->reserva = $reserva;
    }

    public function ejecutar()
    {
        $emailService = new EmailService();
        $espacio = $this->reserva->espacio; 
        $emailService->send("notificaciones@tuapp.com", $this->destinatario, "Reserva creada", "Tu reserva para el espacio {$espacio->nombre} ha sido creada exitosamente.");
    }
}


