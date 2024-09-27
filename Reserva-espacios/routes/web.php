<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SpaceController;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/reservaHome', function () {
    return view('reservaHome');
})->name('reservaHome');


Route::get('register', [RegisterController::class, 'show'])->name('registerShow');
Route::post('register', [RegisterController::class, 'store'])->name('registerStore');

Route::get('passwordRequest', function(){
    return view('passwordRequest');
})->name('passwordRequest'); 

Route::get('passwordEmail', function(){
    return view('passwordEmail');
})->name('passwordEmail');