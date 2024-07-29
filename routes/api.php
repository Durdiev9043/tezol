<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/check-sms/{phone}', [AuthController::class, 'checkSms'])->name('check_sms');
Route::post('reg',[\App\Http\Controllers\Api\AuthController::class,'reg']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);
Route::post('/auth/login/courier', [AuthController::class, 'loginCourier']);
