<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BodaController;

Route::get('/', [BodaController::class, 'invitacion'])->name('invitacion');
Route::post('/rsvp', [BodaController::class, 'store'])->name('rsvp.store');
