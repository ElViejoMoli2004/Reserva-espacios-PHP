<?php

namespace App\Http\Controllers;

use App\Commands\CrearReservaCommand as CommandsCrearReservaCommand;
use App\Commands\EnviarMensajeCommand as CommandsEnviarMensajeCommand;
use Illuminate\Http\Request;
use App\Models\Eventos;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Models\Reserva;
use Illuminate\Support\Carbon;
use App\Console\Commands\CrearReservaCommand;
use App\Console\Commands\EnviarMensajeCommand;
use App\Http\Controllers\Users as ControllersUsers;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use App\Models\Log;

class EventsUsuarios extends Controller
{
    public function homeUsuarios() {
        return view("modules.dashboard.homeUsuarios");
    }

    public function indexEventosUsuariosReserva() {
        $eventos = Eventos::paginate(6);
        $usuarioId = Auth::user()->id;

        foreach ($eventos as $evento) {
            $reserva = Reserva::where('espacio_id', $evento->id)
                              ->where('usuario_id', $usuarioId)
                              ->first();

            $evento->reservado = !is_null($reserva);
            $evento->es_mio = $reserva ? true : false;

            $reservaGeneral = Reserva::where('espacio_id', $evento->id)->first();

            $evento->no_disponible = $reservaGeneral && $reservaGeneral->usuario_id !== $usuarioId;
        }

        return view('modules.dashboard.Usuarios.Eventos.mostrarEventosReserva', compact('eventos', 'usuarioId'));
    }

    public function registrarLog($usuario_id, $accion) {
        $log = new Log();
        $log->usuario_id = $usuario_id;
        $log->accion = $accion;
        $log->save();

        return response()->json(['message' => 'Log registrado correctamente']);
    }

    public function reservaEvento($id) {
        $evento = Eventos::find($id);
        $usuarioId = Auth::user()->id;
        $espacioId = $evento->id;
        $espacios = Eventos::all();

        return view('modules.dashboard.Usuarios.Eventos.reservarEvento', compact('usuarioId', 'espacioId', 'evento', 'espacios'));
    }

    public function crearReserva(Request $request) {
        $request->validate([
            'usuario_id' => 'required|integer',
            'espacio_id' => 'required|integer',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
        ]);

        $fechaInicio = Carbon::parse($request->input('fecha_inicio'));
        $fechaFin = Carbon::parse($request->input('fecha_fin'));

        if ($fechaInicio >= $fechaFin) {
            return redirect()->back()->withErrors(['error' => 'La fecha de inicio debe ser anterior a la fecha de finalización.']);
        }

        $usuario = User::find($request->usuario_id);
        if (!$usuario) {
            return redirect()->back()->withErrors(['error' => 'El usuario no existe.']);
        }

        $espacio = Eventos::find($request->espacio_id);
        if (!$espacio) {
            return redirect()->back()->withErrors(['error' => 'El espacio no existe.']);
        }

        $existeReserva = Reserva::where('usuario_id', $request->usuario_id)
                                 ->where('espacio_id', $request->espacio_id)
                                 ->first();

        if ($existeReserva) {
            $existeReserva->delete();
        }

        $reserva = new Reserva();
        $reserva->usuario_id = $request->usuario_id;
        $reserva->espacio_id = $request->espacio_id;
        $reserva->fecha_inicio = $request->fecha_inicio;
        $reserva->fecha_fin = $request->fecha_fin;
        $reserva->save();

        
        $this->registrarLog(Auth::user()->id, 'Crear Reserva: Reserva creada para el evento: ' . $espacio->nombre);

        $comandoMensaje = new CommandsEnviarMensajeCommand($usuario->email, $reserva);
        $comandoMensaje->ejecutar();

        Session::flash('success', 'Reserva creada y mensaje enviado exitosamente.');

        return $this->reservaCreada($reserva);
    }

    public function reservaCreada(Reserva $reserva) {
        return view('reserva_creada', [
            'fechaInicio' => $reserva->fecha_inicio,
            'fechaFin' => $reserva->fecha_fin,
        ]);
    }

    public function editarUsuarioReserva(string $id) {
        $evento = Eventos::findOrFail($id);
        $usuarioId = Auth::user()->id;
        $espacioId = $evento->id;

        $reserva = Reserva::where('espacio_id', $evento->id)
                          ->where('usuario_id', $usuarioId)
                          ->first();

        if (!$reserva) {
            return redirect()->route('indexEventosUsuariosReserva');
        }

        $fecha_inicio = $reserva->fecha_inicio;
        $fecha_fin = $reserva->fecha_fin;

        return view('modules.dashboard.Usuarios.Eventos.editarEventoReserva', compact('evento', 'usuarioId', 'espacioId', 'fecha_inicio', 'fecha_fin'));
    }

    public function actualizarUsuarioReserva(Request $request, string $id) {
        $request->validate([
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
        ]);

        $usuarioId = Auth::user()->id;
        $reserva = Reserva::where('espacio_id', $id)
                          ->where('usuario_id', $usuarioId)
                          ->firstOrFail();

        $reserva->fecha_inicio = $request->fecha_inicio;
        $reserva->fecha_fin = $request->fecha_fin;
        $reserva->save();


        $evento = Eventos::find($id);
        $this->registrarLog(Auth::user()->id, 'Actualizar Reserva: Reserva actualizada para el evento: ' . $evento->nombre);

        return redirect()->route('indexEventosUsuariosReserva')->with('success', 'Reserva actualizada exitosamente.');
    }

    public function cancelarReserva($id) {
        $usuarioId = Auth::user()->id;

        $reserva = Reserva::where('espacio_id', $id)
                          ->where('usuario_id', $usuarioId)
                          ->firstOrFail();

        $evento = Eventos::find($id);

        $reserva->delete();


        $this->registrarLog(Auth::user()->id, 'Cancelar Reserva: Reserva cancelada para el evento: ' . $evento->nombre);

        return redirect()->route('indexEventosUsuariosReserva')->with('success', 'Reserva cancelada exitosamente.');
    }
}
