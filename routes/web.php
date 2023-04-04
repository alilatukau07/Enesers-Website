<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::post('send-mail', [HomeController::class, 'sendEmail'])->name('send.mail');
