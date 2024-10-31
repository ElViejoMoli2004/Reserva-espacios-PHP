<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventos;
use App\Models\Reserva;

class Events extends Controller
{
    
    public function indexAdministradorEventos()
    {
        
        $eventos = Eventos::paginate(6); 
        return view('modules/dashboard/Administradores/Eventos/eventosCRUD', compact('eventos'));
    }

   
    public function createAdministradorEventos()
    {
        return view('modules/dashboard/Administradores/Eventos/createEvento');
    }

    
    public function crearEspacios(Request $request)
    {
        $post = new Eventos;

        $post->nombre = $request->nombre;
        $post->descripcion = $request->descripcion;
        $post->capacidad = $request->capacidad;
        $post->tipo_evento = $request->tipo_evento;
        $post->ubicacion = $request->ubicacion;

        $post->save();

        return to_route('indexAdministradorEventos');
    }

    
    public function mostrarAdministradorEvento(string $id)
    {
        $evento = Eventos::findOrFail($id);
        return view('modules/dashboard/Administradores/Eventos/mostrarEvento', compact('evento'));
    }

    
    public function editarAdministradorEvento(string $id)
    {
        $evento = Eventos::findOrFail($id);
        return view('modules/dashboard/Administradores/Eventos/editarEvento', compact('evento'));
    }

    
    public function actualizarAdministradorEvento(Request $request, string $id)
    {
        $evento = Eventos::findOrFail($id);
        $evento->nombre = $request->nombre;
        $evento->descripcion = $request->descripcion;
        $evento->capacidad = $request->capacidad;
        $evento->tipo_evento = $request->tipo_evento;
        $evento->ubicacion = $request->ubicacion;

        $evento->save();

        return to_route('indexAdministradorEventos');
    }

    
    public function eliminarAdministradorEvento(string $id)
{
    $evento = Eventos::findOrFail($id);
    
    
    $evento->reservas()->delete(); 

    
    $evento->delete();

    return to_route('indexAdministradorEventos')->with('success', 'Evento eliminado correctamente.');
}


    
    public function obtenerEspacios()
    {
        $espacios = Eventos::all();
        return response()->json($espacios);
    }
}
