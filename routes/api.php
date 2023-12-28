<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::post('/register',[UserController::class,'register']);

Route::post('/login',[UserController::class,'login']);

Route::get('/verification/{id}',[UserController::class,'verification']);
Route::post('/verified',[UserController::class,'verifiedOtp']);

Route::get('/profile',[UserController::class,'profile']);

Route::get('/resend-otp',[UserController::class,'resendOtp']);
Route::post('/getOtp',[UserController::class,'sendOtp']);

Route::get('/refreshToken',[UserController::class,'refreshToken']);
Route::post('/saveRating',[UserController::class,'saveRating']);

Route::post('/updateRating/{id}',[UserController::class,'update']);
Route::get('/deleteRating/{id}',[UserController::class,'delete']);
Route::get('/showRating',[UserController::class,'show']);












Route::group(['middleware'=>'api'],function($routes){
    Route::get('/logout',[UserController::class,'logout']);
    Route::post('/reset-password',[UserController::class,'resetPassword']);
    Route::post('/profileUpdate',[UserController::class,'profileUpdate']);




});
