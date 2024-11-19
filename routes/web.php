<?php

use App\Http\Controllers\controladorController;
use App\Http\Controllers\MaquinaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\oleosController;
use App\Http\Controllers\PagController;

// Route::get('/maquinas/{id}', [MaquinaController::class, 'show'])->name('maquinas.show');
// Route::post('/maquina/{id}/registro', [RegistroController::class, 'registrarManutencao'])->name('maquina.registro');
// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/maquinas/{id}', [MaquinaController::class, 'show'])->name('maquina.show');
// Route::post('/maquina/{id}/registrar', [MaquinaController::class, 'registrar'])->name('maquina.registrar');
// Route::get('/maquinas/{id}', [MaquinaController::class, 'show'])->name('maquinas.show');

//Página home
Route::get('/', [MaquinaController::class, 'index'])->name('index');

// Route::get('maquinas', [controladorController::class, 'maquinas'])->name('maquinas');

Route::get('maquinas/{id}', [MaquinaController::class, 'maquinas'])->name('maquinas');
Route::post('maquinas/{id}', [MaquinaController::class, 'registro']);

Route::get('registro/{id}', [RegistroController::class, 'show'])->name('historico');

// Route::get('maquinas/{id}', [oleosController::class, 'oleos']);


// // Página inicial com todas as máquinas
// Route::get('/', [MaquinaController::class, 'index'])->name('home');

// // Detalhes de uma máquina específica
// Route::get('/maquinas/{id}', [MaquinaController::class, 'show'])->name('maquinas.show');

// // Exibir o histórico de uma máquina específica
// Route::get('/maquinas/{id}/historico', [MaquinaController::class, 'historico'])->name('maquinas.historico');

// // Registrar o uso de uma máquina
// Route::post('/maquinas/{id}/registrar', [MaquinaController::class, 'registrarUso'])->name('maquinas.registrar');


