<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PetsController;
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
Route::resource('pets', PetsController::class);

Route::get('/index',[PetsController::class,'index']);

