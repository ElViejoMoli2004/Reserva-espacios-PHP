<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventos;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Models\Reserva;
use Illuminate\Support\Carbon;

class EventsUsuarios extends Controller
{
    public function homeUsuarios(){
        return view("modules.dashboard.homeUsuarios");
    }

    public function indexEventosUsuariosReserva() {
        $eventos = Eventos::paginate(6);
        $usuarioId = Auth::user()->id; 
    
        foreach ($eventos as $evento) {
            // Busca la reserva del espacio actual por el usuario autenticado
            $reserva = Reserva::where('espacio_id', $evento->id)
                              ->where('usuario_id', $usuarioId) 
                              ->first();
    
            // Indica si el evento está reservado por el usuario autenticado
            $evento->reservado = !is_null($reserva);
            $evento->es_mio = $reserva ? true : false;
    
            // Busca cualquier reserva para el espacio actual
            $reservaGeneral = Reserva::where('espacio_id', $evento->id)->first();
    
            // Verifica si el espacio está reservado por otro usuario
            if ($reservaGeneral && $reservaGeneral->usuario_id !== $usuarioId) {
                $evento->no_disponible = true; // Indica que el espacio está reservado por otro usuario
            } else {
                $evento->no_disponible = false; // Indica que el espacio está disponible
            }
        }
    
        return view('modules.dashboard.Usuarios.Eventos.mostrarEventosReserva', compact('eventos', 'usuarioId'));
    }
    
    

    
    public function reservaEvento($id){
        $evento = Eventos::find($id); 
        $usuarioId = Auth::user()->id; 
        $espacioId = $evento->id; 
        $espacios = Eventos::all(); 
    
        return view('modules.dashboard.Usuarios.Eventos.reservarEvento', compact('usuarioId', 'espacioId', 'evento', 'espacios'));
    }

    

    public function crearReserva(Request $request){
        $request->validate([
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
        ]);

        $fechaInicio = Carbon::parse($request->input('fecha_inicio'));
        $fechaFin = Carbon::parse($request->input('fecha_fin'));

        if ($fechaInicio >= $fechaFin) {
            return redirect()->back()->withErrors(['error' => 'La fecha de inicio debe ser anterior a la fecha de finalización.']);
        }

        $existeReserva = Reserva::where('usuario_id', $request->usuario_id)
                           ->where('espacio_id', $request->espacio_id)
                           ->first();

        if ($existeReserva) {
            $existeReserva->delete(); 
        }   

        $reserva = new Reserva;
        $reserva->usuario_id = $request->usuario_id;
        $reserva->espacio_id = $request->espacio_id;
        $reserva->fecha_inicio = $request->fecha_inicio;
        $reserva->fecha_fin = $request->fecha_fin;
        $reserva->save();

        return redirect()->route('indexEventosUsuariosReserva')->with('success', 'Reserva creada exitosamente.');
    }


    public function editarUsuarioReserva(string $id){
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
    

    public function actualizarUsuarioReserva(Request $request, string $id){
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

        return redirect()->route('indexEventosUsuariosReserva')->with('success', 'Reserva actualizada exitosamente.');
    }

    public function cancelarReserva($id){
        $usuarioId = Auth::user()->id; 

        $reserva = Reserva::where('espacio_id', $id)
                          ->where('usuario_id', $usuarioId)
                          ->firstOrFail(); 
                          
        $reserva->delete(); 
        return redirect()->route('indexEventosUsuariosReserva')->with('success', 'Reserva cancelada exitosamente.');
    }
}
