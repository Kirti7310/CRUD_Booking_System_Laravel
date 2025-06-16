<?php
use App\Http\Controllers\BookingController;


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/bookings/store', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/bookings/edit/{id}', [BookingController::class, 'edit'])->name('bookings.edit');
    Route::post('/bookings/edit/{id}', [BookingController::class, 'update'])->name('bookings.update');
    Route::delete('/bookings/delete/{id}', [BookingController::class, 'destroy'])->name('bookings.delete');


});



require __DIR__.'/auth.php';
