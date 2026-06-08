<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/productosGuardados', [ProductoController::class, 'listar']);

Route::get('/', [ProductoController::class, 'formulario']);

Route::post('/productos', [ProductoController::class, 'store']);

Route::get('/productos/eliminar/{id}', [ProductoController::class, 'destroy']);



Route::get('/productos/editar/{id}', [ProductoController::class, 'edit']);

Route::put('/productos/actualizar/{id}', [ProductoController::class, 'update']);