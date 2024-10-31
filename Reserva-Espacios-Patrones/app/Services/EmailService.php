<?php

namespace App\Services;

class EmailService {
    public function send($to, $message) {
        // Lógica para enviar el correo
        // Mail::to($to)->send(new YourMailable($message));
    }
}
