<?php

use App\Http\Controllers\ProdutoController;

Route::prefix('produtos')->group(
    function() {
        Route::get('/', [ProdutoController::class, 'index'])->name('produtos.index')->middleware('auth');
    }
);
