<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;


Route::middleware("guest")->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/registro', [AuthController::class, 'registro'])->name('registro');
    Route::post('/registrar', [AuthController::class, 'registrar'])->name('registrar');
    Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
});

Route::get('/', function () {
    return view('index'); // Asegúrate de que la ruta sea correcta
})->name('index');


Route::middleware("auth")->group(function () {
    Route::get('/home', [AuthController::class, 'home'])->name('home');
    Route::get('/homeUsuarios', [AuthController::class, 'homeUsuarios'])->name('homeUsuarios');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/indexAdministrador', [Users::class, 'indexAdministrador'])->name('indexAdministrador');
    Route::get('/crear', [Users::class, 'createUsuarios'])->name('createUsuarios');
    Route::post('/crearUsuarios', [Users::class, 'crearUsuarios'])->name('crearUsuarios');
    Route::get('/mostrar/{id}', [Users::class, 'mostrarAdministrador'])->name('mostrarAdministrador');
    Route::get('/editar/{id}', [Users::class, 'editarAdministrador'])->name('editarAdministrador'); 
    Route::put('/actualizar/{id}', [Users::class, 'actualizarAdministrador'])->name('actualizarAdministrador');
    Route::delete('/eliminar/{id}', [Users::class, 'eliminarAdministrador'])->name('eliminarAdministrador');
});
