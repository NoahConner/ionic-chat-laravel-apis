<?php

use Illuminate\Http\Request;
use App\Http\Controllers\dummyApi;
use App\Http\Controllers\JwtAuthController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('allusers',[dummyApi::class,'dummydata']);
Route::post('edituser',[dummyApi::class,'editdata']);
Route::post('creatUser',[dummyApi::class,'create']);
Route::post('login',[dummyApi::class,'login']);
Route::post('storeImg',[dummyApi::class,'storeImg']);