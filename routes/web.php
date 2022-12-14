<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyInfoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('client.home');
});

Route::get('/register', [RegisterController::class,'create']);
Route::post('/register', [RegisterController::class,'submit']);
Route::get('/login', [LoginController::class,'create']);
Route::post('/login', [LoginController::class,'submit']);
Route::get('/logout', [LoginController::class,'logout']);
Route::get('/myinfo', [MyInfoController::class,'create']);
Route::get('/pleaselogin', [LoginController::class,'pleaselogin']);