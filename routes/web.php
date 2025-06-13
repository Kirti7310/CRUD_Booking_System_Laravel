<?php

use App\Http\Controllers\BookingController;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/bookings',[BookingController::class,'index'])->name('bookings.index');

Route::get('/bookings/create',[BookingController::class,'create'])->name('bookings.create');

Route::post('/bookings/store',[BookingController::class,'store'])->name('bookings.store');

Route::post('/bookings/edit/{id}',[BookingController::class,'update'])->name('bookings.edit');

