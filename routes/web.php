<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApresentacaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apresentacao', [ApresentacaoController::class, 'index']);
