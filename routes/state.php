<?php
use App\Http\Controllers\StateController;

Route::middleware('auth')->group(function () {
    Route::get('state', [StateController::class, 'index'])->name('state.dashboard');
    Route::get('state/create', [StateController::class, 'create'])->name('state.create');
    Route::get('state/{id}', [StateController::class, 'edit'])->name('state.edit');
    Route::get('state/{state}', [StateController::class, 'getLGA'])->name('state.lgas');
    Route::delete('state', [StateController::class, 'destroy'])->name('state.destroy');
    Route::post('state', [StateController::class, 'store'])->name('state.store');
    Route::put('state/{id}', [StateController::class, 'update'])->name('state.update');
});