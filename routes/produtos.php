<?php

use App\Http\Controllers\ProdutoController;

Route::prefix('produtos')->group(
    function() {
        Route::get('/', [ProdutoController::class, 'index'])->name('produtos.index');
        Route::get('/cadastro/{produto?}', [ProdutoController::class, 'cadastrar'])->name('produtos.cadatro')->middleware('auth');
        Route::post('/salvar/{produto?}', [ProdutoController::class, 'salvar'])->name('produtos.salvar')->middleware('auth');
    }
);
