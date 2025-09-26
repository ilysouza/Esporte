<?php

use App\Http\Controllers\JogadorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('jogadores', [JogadorController::class, 'store']);
Route::get('jogadores', [JogadorController::class, 'index']);
Route::put('jogadores', [JogadorController::class, 'update']);
Route::delete('jogadores/{id}', [JogadorController::class, 'delete']);
Route::get('jogadores/{id}', [JogadorController::class, 'show']);