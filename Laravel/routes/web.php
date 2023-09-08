<?php

use App\Http\Controllers\webController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index']);
Route::get('/valor-url/{qnt}', [WebController::class, 'varUrl']);
Route::get('/atividade/{atv}', [WebController::class, 'ativ']);
Route::get('/sair', [WebController::class, 'exit']);
