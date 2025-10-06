<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Route;

// Rotas

Route::get('/', function () {
    return view('banner');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

/* CADASTRO DE USUÁRIO */ 
Route::get('/cadastro_usuario', function () {
    return view('cadastro');
})->name('cadastro');

Route::post('/cadastro', [UserController::class, 'store'])->name('cadastro.store');
/* CADASTRO DE USUÁRIO */ 

/* LOGIN DE USUÁRIO*/
Route::post('/login-custom', [UserController::class, 'login'])->name('login.custom');
/* LOGIN DE USUÁRIO*/

Route::get('/cadastro_comercio', function () {
    return view('comercio');
})->name('comercio');

Route::get('/configurar_comercio', function () {
    return view('configurar');
})->name('configurar');

Route::get('/editar_usuario', function () {
    return view('editar');
})->name('editar');

// TESTE DE AUTENTICAÇÃO !!
Route::get('/teste-auth', function () {
    throw new AuthenticationException();
});
// TESTE DE AUTENTICAÇÃO !!

// Breeze

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
