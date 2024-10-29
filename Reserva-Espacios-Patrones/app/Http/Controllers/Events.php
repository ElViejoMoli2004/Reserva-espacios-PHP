<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventos;

class Events extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexAdministradorEventos()
    {
        // Cambiado para usar paginate en lugar de all()
        $eventos = Eventos::paginate(6); // 6 eventos por página
        return view('modules/dashboard/Administradores/Eventos/eventosCRUD', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createAdministradorEventos()
    {
        return view('modules/dashboard/Administradores/Eventos/createEvento');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function mostrarAdministradorEvento(string $id)
    {
        $evento = Eventos::findOrFail($id);
        return view('modules/dashboard/Administradores/Eventos/mostrarEvento', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editarAdministradorEvento(string $id)
    {
        $evento = Eventos::findOrFail($id);
        return view('modules/dashboard/Administradores/Eventos/editarEvento', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function eliminarAdministradorEvento(string $id)
    {
        $evento = Eventos::findOrFail($id);
        $evento->delete();

        return to_route('indexAdministradorEventos');
    }

    /**
     * Obtener todos los espacios (eventos).
     */
    public function obtenerEspacios()
    {
        $espacios = Eventos::all();
        return response()->json($espacios);
    }
}
