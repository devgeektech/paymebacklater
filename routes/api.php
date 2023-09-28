<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlaidController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'auth'], function () {
    Route::post('/register', [AuthController::class, 'register']);
    // Route::post('/login', [AuthController::class, 'login']);

    Route::post('/login-verifyotp', [AuthController::class, 'loginAndverifyOtp']);
    Route::post('/send-otp', [AuthController::class, 'sendOtp']);

    Route::post('/forgotpassword', [AuthController::class, 'forgotPassword']);


    Route::post('reset-password', [AuthController::class, 'passwordStore'])->name('password.store');

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::middleware('auth:sanctum')->group(function () {
        // Protected routes here
        Route::get('plaid/transactions', [PlaidController::class, 'retrieveTransactions']);
    });
});


