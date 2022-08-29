<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});

Route::get('/email/verify/{id}', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');



Route::group([
    'prefix' => 'customer'
], function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('/login', 'login');
        Route::post('/register', 'register');
        // Route::post('/reset-password', 'resetPassword');
        // Route::post('/update-password', 'updatePassword');
    });

    Route::group(['middleware' => 'auth:sanctum',], function () {
        Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
        // Route::post('/refresh', [AuthController::class, 'refresh'])->name('token.refresh');
    });

    Route::get('/verify/{token}', [AuthController::class, 'verifyEmail'])->name('verify.email');
});
