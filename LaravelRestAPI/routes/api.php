<?php

use App\Http\Controllers\ReservaController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UsuarioController;

Route::post('/reservas', [ReservaController::class, 'store']);
Route::get('/reservas/{id}', [ReservaController::class, 'show']);
Route::put('/reservas/{id}', [ReservaController::class, 'update']);
Route::delete('/reservas/{id}', [ReservaController::class, 'destroy']);

Route::post('/tours', [TourController::class, 'store']);
Route::get('/tours/{id}', [TourController::class, 'show']);
Route::put('/tours/{id}', [TourController::class, 'update']);
Route::delete('/tours/{id}', [TourController::class, 'destroy']);

Route::post('/usuarios', [UsuarioController::class, 'store']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);
Route::put('/usuarios/{id}', [UsuarioController::class, 'update']);
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy']);