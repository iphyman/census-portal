<?php
use App\Http\Controllers\DepartmentController;

Route::middleware('auth')->group(function () {
    Route::get('department', [DepartmentController::class, 'index'])->name('department.dashboard');
    Route::get('department/create', [DepartmentController::class, 'create'])->name('department.create');
    Route::get('department/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
    Route::delete('department/{id}', [DepartmentController::class, 'destroy'])->name('department.destroy');
    Route::put('department/{id}', [DepartmentController::class, 'update'])->name('department.update');
    Route::post('department', [DepartmentController::class, 'store'])->name('department.store');
});