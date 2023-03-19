<?php
use App\Http\Controllers\StateController;

Route::middleware('guest')->group(function () {
    Route::get('state/create', [StateController::class, 'create'])->name('state.create');
    Route::post('state', [StateController::class, 'store'])->name('state.store');
});