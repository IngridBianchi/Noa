<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoServicioController;
use App\Http\Controllers\RubroController;
use App\Http\Controllers\UnidadMedidaController;
use App\Http\Controllers\CondicionIvaController;

// Página de bienvenida (landing antes de autenticarse)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Vista principal del proyecto después de loguearse
Route::get('/main', function () {
    return view('main');
})->middleware(['auth', 'verified'])->name('main');

// Ruta /dashboard (puede redirigir al main si querés)
Route::get('/dashboard', function () {
    return redirect()->route('main');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grupo de rutas protegidas para perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('productos-servicios', ProductoServicioController::class);
});

Route::resource('rubros', RubroController::class);
Route::resource('unidad-medidas', UnidadMedidaController::class);
Route::resource('condicion-ivas', CondicionIvaController::class);


// Autenticación Breeze
require __DIR__.'/auth.php';
