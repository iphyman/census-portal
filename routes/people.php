<?php
use App\Http\Controllers\PeopleController;

Route::middleware('guest')->group(function () {
    Route::get('people/create', [PeopleController::class, 'create'])->name('people.create');
    Route::post('people', [PeopleController::class, 'store'])->name('people.store');
});