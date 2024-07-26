<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApresentacaoController;

Route::get('/', [ApresentacaoController::class, 'index']);

Route::get('/criar-aluno', [ApresentacaoController::class, 'index']);