<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registerPost;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Controller
{
    public function indexAdministrador()
    {
        $items = User::paginate(10);
        return view('modules/dashboard/Administradores/usuariosCRUD', compact('items'));
    }

    public function createUsuarios()
    {
        return view('modules/dashboard/Administradores/create');
    }

    public function crearUsuarios(Request $request)
    {
        $post = new registerPost;

        $post->primer_nombre = $request->primer_nombre;
        $post->segundo_nombre = $request->segundo_nombre;
        $post->primer_apellido = $request->primer_apellido;
        $post->segundo_apellido = $request->segundo_apellido;
        $post->cedula = $request->cedula;
        $post->email = $request->email;
        $post->password = Hash::make($request->password);
        $post->telefono = $request->telefono;
        $post->rol_id = $request->rol_id;

        $post->save();

        return to_route('indexAdministrador');
    }

    public function mostrarAdministrador(string $id)
    {
        $item = User::find($id);
        return view('modules/dashboard/Administradores/mostrar', compact('item'));
    }

    public function editarAdministrador(string $id)
    {
        $item = User::find($id);
        return view('modules/dashboard/Administradores/editar', compact('item'));
    }

    public function actualizarAdministrador(Request $request, string $id)
    {
        $item = User::find($id);
        $item->primer_nombre = $request->primer_nombre;
        $item->segundo_nombre = $request->segundo_nombre;
        $item->primer_apellido = $request->primer_apellido;
        $item->segundo_apellido = $request->segundo_apellido;
        $item->cedula = $request->cedula;
        $item->email = $request->email;
        $item->password = Hash::make($request->password);
        $item->telefono = $request->telefono;
        $item->rol_id = $request->rol_id;
        $item->save();
        return to_route('indexAdministrador');
    }

    public function eliminarAdministrador(string $id)
    {
        $item = User::find($id);
        $item->delete();
        return to_route('indexAdministrador');
    }
}
