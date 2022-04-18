<?php

use App\Http\Controllers\PedidoController;

Route::middleware(['auth'])->prefix('pedidos')->group(
    function() {
        Route::get('/', [PedidoController::class, 'index']);
    }
);
