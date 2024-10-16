<?php

use App\Http\Controllers\AuthController;
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
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
