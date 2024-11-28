<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\mobile_app_api;
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
Route::post('/login_post',[App\Http\Controllers\mobile_app_api::class, 'login']);
Route::post('/create_user',[App\Http\Controllers\mobile_app_api::class, 'create_user']);
Route::post('/reset_password',[App\Http\Controllers\mobile_app_api::class, 'reset_password']);
Route::post('/actiontoresetpassword',[App\Http\Controllers\mobile_app_api::class, 'actionresetpassword']);


Route::post('/insert_unit',[App\Http\Controllers\mobile_app_api::class, 'insert_unit']);
Route::post('/insert_unit_share',[App\Http\Controllers\mobile_app_api::class, 'insert_share']);

Route::post('/get_units',[App\Http\Controllers\mobile_app_api::class, 'get_units']);