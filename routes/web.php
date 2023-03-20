<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    $hour = Carbon::now()->hour;
    $greeting = ($hour > 17) ? 'Evening' : (($hour > 12) ? 'Afternoon' : 'Morning');
    return view('dashboard', ['greeting' => $greeting]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/staff', [StaffController::class, 'index'])->name('staff.dashboard');
    Route::get('/staff/{id}', [StaffController::class, 'edit'])->name('staff.edit');
    Route::delete('/staff/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');
});

require __DIR__ . '/auth.php';

require __DIR__ . '/department.php';

require __DIR__ . '/state.php';

require __DIR__ . '/lga.php';

require __DIR__ . '/people.php';