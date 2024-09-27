<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Models\registerPost;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('prueba', function(){
    $post = new registerPost;

    $post->primer_nombre = 'Jeremy';
    $post->segundo_nombre = 'Steward';
    $post->primer_apellido = 'Vallejo';
    $post->segundo_apellido = 'TCorrea';
    $post->cedula = '12312341';
    $post->email = 'kdjaskldja@gmail.com';
    $post->password = '1231231';
    $post->telefono = '2543532';
    $post->rol_id = '2';

    $post->save();

    return $post;

});






Route::get('register', [RegisterController::class, 'show'])->name('registerShow');
Route::post('register', [RegisterController::class, 'store'])->name('registerStore');

Route ::get('passwordRequest', function(){
    return view('passwordRequest');
})->name('passwordRequest'); 
Route ::get('passwordEmail', function(){
    return view('passwordEmail');
})->name('passwordEmail');