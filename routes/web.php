<?php

use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\OnlineTerapiController;
use App\Http\Controllers\front\RandevuAlController;
use Illuminate\Support\Facades\Route;

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


/*
Front
*/
Route::get('/', [HomeController::class, 'index']);
Route::get('/iletisim', [ContactController::class,'Contact']);
Route::get('/randevual', [RandevuAlController::class,'RandevuAl']);
Route::get('/onlineterapi', [OnlineTerapiController::class,'OnlineTerapi']);



/*
Admin
*/
