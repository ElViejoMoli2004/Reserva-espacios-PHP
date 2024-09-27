<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Space;

class SpaceController extends Controller
{
    public function show()
    {
        $spaces = Space::all();
        return view('home', compact('spaces'));
    }

    public function store(Request $request)
    {
        $space = new Space;

        $space->nombre = $request->nombre;
        $space->descripcion = $request->descripcion;
        $space->capacidad = $request->capacidad;
        $space->ubicacion = $request->ubicacion;

        $space->save();

        return redirect()->route('spaces.show')->with('success', 'Espacio añadido exitosamente');
    }
}