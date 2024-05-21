<?php

use App\Http\Controllers\Mpesa\C2BController;
use App\Http\Controllers\Mpesa\StkPushController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/cb/confirm/payment', [StkPushController::class, 'stkConfirm'])->name('stkPush.confirm');

// c2b routes
Route::post('/c-2-b/confirm-url', [C2BController::class, 'confirm'])->name('c2b.confirm');
Route::post('/c-2-b/validate-url', [C2BController::class, 'validation'])->name('c2b.validation');
