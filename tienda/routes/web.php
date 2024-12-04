<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticulosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarritoController;

Route::get('/', [ArticulosController::class, 'index'])->name('home');

// Definir la ruta para 'home'
Route::get('/home', [ArticulosController::class, 'home'])->name('home');

// Ruta para Agregar Artículo 
Route::get('/agregar_articulo', [ArticulosController::class, 'create'])->name('agregar_articulo');

// Ruta para la vista de MisArticulos
Route::get('/MisArticulos', function () { return view('MisArticulos'); })->name('MisArticulos'); 



// Ruta para la vista de Órdenes 
Route::get('/ordenes', function () { return view('ordenes'); })->name('ordenes');

Route::get('/Ganancias', function () { return view('Ganancias'); })->name('Ganancias');
Route::middleware('auth')->group(function () {
    Route::get('/hombres', [ArticulosController::class, 'hombres'])->name('hombres');
    Route::get('/mujeres', [ArticulosController::class, 'mujeres'])->name('mujeres');
    Route::get('/ninos', [ArticulosController::class, 'ninos'])->name('ninos');
    Route::get('/accesorios', [ArticulosController::class, 'accesorios'])->name('accesorios');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Ruta para mostrar el formulario de Agregar Artículo
    Route::get('/agregar_articulo', [ArticulosController::class, 'create'])->name('agregar_articulo');

    // Ruta para guardar el artículo
    Route::post('/agregar_articulo', [ArticulosController::class, 'store'])->name('agregar_articulo.store');

    //agregar al Carrito
    Route::post('/carrito', [CarritoController::class, 'store'])->name('carrito.store');
    Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito');
    Route::delete('/carrito/{id}', [CarritoController::class, 'destroy'])->name('carrito.destroy');
    Route::get('/carrito/imprimir', [CarritoController::class, 'imprimirTicket'])->name('carrito.imprimir');
    Route::post('/carrito/pagar', [CarritoController::class, 'pagar'])->name('carrito.pagar');

});

require __DIR__.'/auth.php';



