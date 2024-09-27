<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterPost;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $post = new RegisterPost;

        $post->primer_nombre = $request->primer_nombre;
        $post->segundo_nombre = $request->segundo_nombre;
        $post->primer_apellido = $request->primer_apellido;
        $post->segundo_apellido = $request->segundo_apellido;
        $post->cedula = $request->cedula;
        $post->email = $request->email;
        $post->password = bcrypt($request->password); // Encriptar la contraseña
        $post->telefono = $request->telefono;
        $post->rol_id = $request->rol_id;

        $post->save();

        return redirect()->route('registerShow')->with('success', 'Registro exitoso');
    }
}