<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::prefix('guest')->name('guest.')->group(function () {
    Route::get('/', [GuestController::class, 'index'])->name('index');
    Route::get('/{id}', [GuestController::class, 'show'])->name('show');
    Route::post('/', [GuestController::class, 'create'])->name('create');
    Route::put('/{id}', [GuestController::class, 'update'])->name('update');
    Route::delete('/{id}', [GuestController::class, 'delete'])->name('delete');
});
