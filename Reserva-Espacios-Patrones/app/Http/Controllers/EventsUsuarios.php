<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventos;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Models\Reserva;

class EventsUsuarios extends Controller
{
    public function homeUsuarios(){
        return view("modules.dashboard.homeUsuarios");
    }

    public function indexEventosUsuariosReserva(){
        $eventos = Eventos::paginate(6);
        $usuarioId = Auth::user()->id; 

        foreach ($eventos as $evento) {
            $reserva = Reserva::where('espacio_id', $evento->id)
                              ->where('usuario_id', $usuarioId) 
                              ->first();
            $evento->reservado = !is_null($reserva); 
            $evento->es_mio = $reserva ? true : false; 
        }

        return view('modules.dashboard.Usuarios.Eventos.mostrarEventosReserva', compact('eventos', 'usuarioId'));
    }

    public function reservaEvento($id){
        $evento = Eventos::find($id); 
        $usuarioId = Auth::user()->id; 
        $espacioId = $evento->id; 
    
        
        return view('modules.dashboard.Usuarios.Eventos.reservarEvento', compact('usuarioId', 'espacioId', 'evento'));
    }
    

    public function crearReserva(Request $request){
        $request->validate([
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio', 
        ]);

        
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
