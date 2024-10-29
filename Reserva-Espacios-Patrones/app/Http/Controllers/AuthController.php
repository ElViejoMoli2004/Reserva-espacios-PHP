<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\registerPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        return view("modules/auth/login");
    }

    public function registro(){
        return view("modules/auth/registro");
    }

    public function registrar(Request $request)
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

        return to_route('login');
    }


    public function logear(Request $request)
{
    $credenciales = [
        'cedula' => $request->cedula,
        'password' => $request->password
    ];

    
    if (Auth::attempt($credenciales)) {
        $usuario = Auth::user();

        
        if ($usuario->rol_id == 1) {
            return redirect()->route('home'); 
        } elseif ($usuario->rol_id == 2) {
            return redirect()->route('homeUsuarios'); 
        } 

    } else {
        return redirect()->route('login'); 
    }
}


    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login');
    }

    public function home()
    {
        $usuario = Auth::user(); 
        return view("modules.dashboard.home", compact('usuario'));
    }

    public function homeUsuarios(){
        return view("modules.dashboard.homeUsuarios");
    }

}
