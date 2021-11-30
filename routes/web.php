<?php

use App\Http\Controllers\front\AnlasmaliKurumlarController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\EkibimizController;
use App\Http\Controllers\front\GizlilikPolitikamizController;
use App\Http\Controllers\front\HakkimizdaController;
use App\Http\Controllers\front\HizmetlerimizController;
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
Route::get('/online-terapi', [OnlineTerapiController::class,'OnlineTerapi']);
Route::get('/ekibimiz', [EkibimizController::class,'Ekibimiz']);
Route::get('/hakkimizda', [HakkimizdaController::class,'Hakkimizda']);
Route::get('/anlasmali-kurumlar', [AnlasmaliKurumlarController::class,'AnlasmaliKurumlar']);
Route::get('/gizlilik-politikamiz', [GizlilikPolitikamizController::class,'GizlilikPolitikamiz']);
Route::get('/hizmetlerimiz', [HizmetlerimizController::class,'Hizmetlerimiz']);
Route::get('/randevu-al', [RandevuAlController::class,'RandevuAl']);
Route::get('/iletisim', [ContactController::class,'Contact']);



/*
Admin
*/
