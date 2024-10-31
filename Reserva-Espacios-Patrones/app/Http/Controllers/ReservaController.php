<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;


class ReservaController extends Controller
{
  public function crearReserva(Request $request)
  {
      $reserva = new Reserva;

      $reserva->usuario_id = $request->usuario_id;
      $reserva->espacio_id = $request->espacio_id;
      $reserva->fecha_inicio = $request->fecha_inicio;
      $reserva->fecha_fin = $request->fecha_fin;
      $reserva->estado = $request->estado ?? 'pendiente';

      $reserva->save();

      return to_route('');
  }
}
