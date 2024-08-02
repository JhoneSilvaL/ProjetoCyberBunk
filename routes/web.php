<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CursoController;

Route::get('/', [CursoController::class, 'index']);

Route::get('/curso-listagem', [CursoController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/welcome', function(){
    return view("welcome");
});
