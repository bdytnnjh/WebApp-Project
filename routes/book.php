<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/booking', [BookingController::class, 'showBookingForm'])->name('booking.form');

Route::post('/booking', [BookingController::class, 'storeBooking'])->name('booking.store');
