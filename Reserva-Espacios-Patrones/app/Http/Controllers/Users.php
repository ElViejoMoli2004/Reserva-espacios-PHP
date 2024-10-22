<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registerPost;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexUsuarios()
    {
        $items = User::paginate(10);
        return view('modules/dashboard/Usuarios/usuariosCRUD', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createUsuarios()
    {
        return view('modules/dashboard/Usuarios/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function crearUsuarios(Request $request)
    {
        $post = new registerPost;

        $post->primer_nombre = $request->primer_nombre;
        $post->segundo_nombre = $request->segundo_nombre;
        $post->primer_apellido = $request->primer_apellido;
        $post->segundo_apellido = $request->segundo_apellido;
        $post->cedula = $request->cedula;
        $post->email = $request->email;
        $post->password = Hash::make($request->password); // Encriptar la contraseña
        $post->telefono = $request->telefono;
        $post->rol_id = $request->rol_id;

        $post->save();

        return to_route('indexUsuarios');
    }

    /**
     * Display the specified resource.
     */
    public function mostrar(string $id)
    {
        $item = User::find($id);
        return view('modules/dashboard/Usuarios/mostrar', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editar(string $id)
    {
        $item = User::find($id);
        return view('modules/dashboard/Usuarios/editar', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function actualizar(Request $request, string $id)
    {
        $item = User::find($id);
        $item->primer_nombre = $request->primer_nombre;
        $item->segundo_nombre = $request->segundo_nombre;
        $item->primer_apellido = $request->primer_apellido;
        $item->segundo_apellido = $request->segundo_apellido;
        $item->cedula = $request->cedula;
        $item->email = $request->email;
        $item->password = Hash::make($request->password); // Encriptar la contraseña
        $item->telefono = $request->telefono;
        $item->rol_id = $request->rol_id;
        $item->save();
        return to_route('indexUsuarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function eliminar(string $id)
    {
        $item = User::find($id);
        $item->delete();
        return to_route('indexUsuarios');
    }
}
