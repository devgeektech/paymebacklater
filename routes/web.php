<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\web\DashboardController;

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


Route::middleware(['webpageauth'])->group(function () {
    // Define your protected routes here
    // For example:
    Route::get('/', function () { return view('welcome'); });

    Route::get('login', function () {
        $countryList = config('countries.countries');
        return view('auth.login', compact('countryList'));
    })->name('login');

    Route::get('register', function () {
        $countryList = config('countries.countries');
        return view('auth.register', compact('countryList'));
    })->name('register');


    Route::get('reset-password/{token}', [AuthController::class, 'passwordReset'])->name('password.reset');
    // routes/web.php
    Route::get('/verify/email/{token}', [AuthController::class, 'verifyEmail'] )->name('verify.email');



    Route::get('term-services', function () {
        return view('pages.termservices');
    })->name('term-services');

    Route::middleware(['auth:sanctum'])->group(function () {
        // Your protected routes here
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
});


