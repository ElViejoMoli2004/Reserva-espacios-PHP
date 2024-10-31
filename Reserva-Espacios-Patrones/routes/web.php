<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Events;
use App\Http\Controllers\EventsUsuarios;

Route::middleware("guest")->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('index');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/registro', [AuthController::class, 'registro'])->name('registro');
    Route::post('/registrar', [AuthController::class, 'registrar'])->name('registrar');
    Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
});




Route::middleware("auth")->group(function () {
    Route::get('/home', [AuthController::class, 'home'])->name('home');
    Route::get('/homeUsuarios', [EventsUsuarios::class, 'homeUsuarios'])->name('homeUsuarios');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/indexAdministrador', [Users::class, 'indexAdministrador'])->name('indexAdministrador');
    Route::get('/crear', [Users::class, 'createUsuarios'])->name('createUsuarios');
    Route::post('/crearUsuarios', [Users::class, 'crearUsuarios'])->name('crearUsuarios');
    Route::get('/mostrar/{id}', [Users::class, 'mostrarAdministrador'])->name('mostrarAdministrador');
    Route::get('/editar/{id}', [Users::class, 'editarAdministrador'])->name('editarAdministrador'); 
    Route::put('/actualizar/{id}', [Users::class, 'actualizarAdministrador'])->name('actualizarAdministrador');
    Route::delete('/eliminar/{id}', [Users::class, 'eliminarAdministrador'])->name('eliminarAdministrador');
    Route::get('/indexAdministradorEventos', [Events::class, 'indexAdministradorEventos'])->name('indexAdministradorEventos');
    Route::get('/crearEventos', [Events::class, 'createAdministradorEventos'])->name('createAdministradorEventos');
    Route::post('/crearEspacios', [Events::class, 'crearEspacios'])->name('crearEspacios');
    Route::get('/api/espacios', [Events::class, 'obtenerEspacios'])->name('obtenerEspacios');
    Route::get('/mostrarEvento/{id}', [Events::class, 'mostrarAdministradorEvento'])->name('mostrarAdministradorEvento');
    Route::get('/editarEspacio/{id}', [Events::class, 'editarAdministradorEvento'])->name('editarAdministradorEvento');
    Route::put('/actualizarEspacio/{id}', [Events::class, 'actualizarAdministradorEvento'])->name('actualizarAdministradorEvento');
    Route::delete('/eliminarEspacio/{id}', [Events::class, 'eliminarAdministradorEvento'])->name('eliminarAdministradorEvento');
    Route::get('/indexEventosUsuariosReserva', [EventsUsuarios::class, 'indexEventosUsuariosReserva'])->name('indexEventosUsuariosReserva');
    Route::get('/reservaEvento/{id}', [EventsUsuarios::class, 'reservaEvento'])->name('reservaEvento');
    Route::post('/crearReserva', [EventsUsuarios::class, 'crearReserva'])->name('crearReserva');
    Route::get('/editarUsuarioReserva/{id}', [EventsUsuarios::class, 'editarUsuarioReserva'])->name('editarUsuarioReserva');
    Route::put('/actualizarUsuarioReserva/{id}', [EventsUsuarios::class, 'actualizarUsuarioReserva'])->name('actualizarUsuarioReserva');
    Route::delete('/eliminarUsuarioReserva/{id}', [EventsUsuarios::class, 'cancelarReserva'])->name('eliminarUsuarioReserva');
    Route::get('/reservaCreada', [EventsUsuarios::class, 'reservaCreada'])->name('reservaCreada');

    

    

    

});
