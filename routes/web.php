<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Auth\RegisterController;







// Ruta principal
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Autenticación
Auth::routes();

// Rutas públicas
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/acerca-de', fn() => view('acerca_nosotros'))->name('acerca');
Route::get('/contactos', fn() => view('contactos'))->name('contacto');

// Ruta de perfil



Route::middleware(['auth'])->group(function() {
    // Dashboard general
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Dashboard específico para técnicos
    Route::get('/dashboard1', [DashboardController::class, 'index'])->name('dashboard1');

    // Rutas para parcelas (protegidas por middleware de rol)
    Route::middleware(['role:Tecnico'])->group(function() {
        Route::resource('parcelas', ParcelaController::class);
    });
});

    

 



