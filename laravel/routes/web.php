<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


// Rotas

Route::get('/', [UserController::class, 'index'])->name('home');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');


/* CADASTRO DE USUÁRIO */ 
Route::get('/cadastro_usuario', function () {
    return view('cadastro');
})->name('cadastro');

Route::post('/cadastro', [UserController::class, 'store'])->name('cadastro.store');
/* CADASTRO DE USUÁRIO */ 


/* AUTENTICAÇÃO USUÁRIO*/
Route::post('/login-custom', [UserController::class, 'login'])->name('login.custom');

Route::post('/logout-custom', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('home');
})->name('logout.custom');
/* AUTENTICAÇÃO DE USUÁRIO*/


Route::get('/cadastro_comercio', function () {
    return view('comercio');
})->name('comercio');

Route::get('/configurar_comercio', function () {
    return view('configurar');
})->name('configurar');


/* EDIÇÃO DE USUÁRIO*/
Route::get('/editar_usuario', [UserController::class, 'editar'])->middleware('auth')->name('editar');

Route::post('/atualizar_usuario', [UserController::class, 'atualizar'])->middleware('auth')->name('atualizar.usuario');
/* EDIÇÃO DE USUÁRIO*/

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
