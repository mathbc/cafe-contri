<?php

use App\Http\Controllers\AuthCafeContriController;

Route::prefix('auth-cafe-contri')->group(
    function() {
        Route::get('/register', [AuthCafeContriController::class, 'registrarUsuario'])->name('auth-cafe-contri.registrar-usuario');
        Route::post('/salvarRegistro', [AuthCafeContriController::class, 'salvarRegistro'])->name('auth-cafe-contri.salvar-registro');
    }
);
