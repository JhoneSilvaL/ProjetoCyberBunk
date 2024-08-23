<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CursoController;

Route::redirect('/', '/login');

Route::middleware('auth')->group(function(){
    // Route, verbo, nome da rota temporário, classe do controller utilizada, nome da rota permanente.
    Route::get('/curso-listagem', [CursoController::class, 'index'])->name('curso.listagem');
    Route::get('/curso-cadastro', [CursoController::class, 'create'])->name('curso.cadastro');
    Route::post('/curso-salvar', [CursoController::class, 'store'])->name('curso.salvar');
    Route::get('/curso-alterar/{id}', [CursoController::class, 'edit'])->name('curso.alterar');
    Route::put('/curso-atualizar/{id}', [CursoController::class, 'update'])->name('curso.atualizar');
    Route::get('/curso-deletar/{id}', [CursoController::class, 'destroy'])->name('curso.deletar');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');