<?php
use App\Http\Controllers\LocalGovernmentController;

Route::middleware('auth')->group(function () {
    Route::get('lga', [LocalGovernmentController::class, 'index'])->name('lga.dashboard');
    Route::get('lga/create', [LocalGovernmentController::class, 'create'])->name('lga.create');
    Route::get('lga/{id}', [LocalGovernmentController::class, 'edit'])->name('lga.edit');
    Route::delete('lga/{id}', [LocalGovernmentController::class, 'destroy'])->name('lga.destroy');
    Route::post('lga', [LocalGovernmentController::class, 'store'])->name('lga.store');
    Route::put('lga/{id}', [LocalGovernmentController::class, 'update'])->name('lga.update');
});