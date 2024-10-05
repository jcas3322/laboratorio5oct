<?php

use App\Http\Controllers\Controladores\AcercaDeController;
use App\Http\Controllers\Controladores\ContactoController;
use App\Http\Controllers\Controladores\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('contacto', ContactoController::class);
Route::get('acercade', [AcercadeController::class, 'index'])->name('acercade');
