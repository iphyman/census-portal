<?php
use App\Http\Controllers\LocalGovernmentController;

Route::middleware('guest')->group(function () {
    Route::get('lga/create', [LocalGovernmentController::class, 'create'])->name('lga.create');
    Route::post('lga', [LocalGovernmentController::class, 'store'])->name('lga.store');
});