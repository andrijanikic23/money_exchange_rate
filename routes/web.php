<?php

use App\Http\Controllers\ExchangeRateController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', [ExchangeRateController::class, 'index'])->name('welcome');

Route::get('/result', [ExchangeRateController::class, 'getRequestedRate'])->name('rate.requested');
