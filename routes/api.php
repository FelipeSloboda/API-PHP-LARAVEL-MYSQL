<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClienteController;

// ROTAS DE CLIENTES
// GET: SELECIONA TODOS OS CLIENTES
Route::get('/clientes', [ClienteController::class, 'index']);
// GET: SELECIONA UM CLIENTE ESPECÍFICO PELO ID
Route::get('/clientes/{cliente}', [ClienteController::class, 'show']);
// POST: CRIA NOVO CLIENTE
Route::post('/clientes', [ClienteController::class, 'store']);
// DELETE: EXCLUI UM CLIENTE ESPECÍFICO PELO ID
Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy']);
// PUT: ATUALIZA UM CLIENTE ESPECÍFICO PELO ID
Route::put('/clientes/{cliente}', [ClienteController::class, 'update']);