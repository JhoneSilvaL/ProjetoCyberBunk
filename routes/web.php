<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApresentacaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apresentacao', [ApresentacaoController::class, 'index']);

Route::get('/nome', function () {
    return view('telaDeCadastro');
});

Route::get('/criar-aluno', [AlunoController::class, 'store']);