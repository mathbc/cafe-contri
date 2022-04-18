<?php

use App\Http\Controllers\AdminController;

Route::middleware(['auth'])->prefix('admin')->group(
    function() {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    }
);
