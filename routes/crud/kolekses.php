<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('koleksis', App\Http\Controllers\KoleksiController::class, []);
    
});
