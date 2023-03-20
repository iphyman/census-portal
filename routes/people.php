<?php
use App\Http\Controllers\PeopleController;

Route::middleware('auth')->group(function () {
    Route::get('people', [PeopleController::class, 'index'])->name('people.dashboard');
    Route::get('people/create', [PeopleController::class, 'create'])->name('people.create');
    Route::get('people/{id}', [PeopleController::class, 'edit'])->name('people.edit');
    Route::delete('people', [PeopleController::class, 'destroy'])->name('people.destroy');
    Route::put('people/{id}', [PeopleController::class, 'update'])->name('people.update');
    Route::post('people', [PeopleController::class, 'store'])->name('people.store');
});