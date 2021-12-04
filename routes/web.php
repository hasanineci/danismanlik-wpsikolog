<?php
/*
Admin
*/
use App\Http\Controllers\admin\AdminIndexController;
use App\Http\Controllers\admin\AnlasmaliKurumlarController as AdminAnlasmaliKurumlarController;
use App\Http\Controllers\admin\BekleyenRandevularController;
use App\Http\Controllers\admin\EkipController;
use App\Http\Controllers\admin\GelenMaillerController;
use App\Http\Controllers\admin\iletisimAyarlariController;
use App\Http\Controllers\admin\OnaylananRandevularController;
use App\Http\Controllers\admin\YeniGelenMaillerController;
use App\Http\Controllers\admin\YonetimAyarlariController;
use App\Http\Controllers\auth\LoginController;
/*
Front
*/
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
Route::get('/login', [LoginController::class, 'Login_GET'])->name('login');
Route::post('/login', [LoginController::class, 'Login_POST']);
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminIndexController::class, 'AdminIndex']);

    Route::get('/admin/ekip', [EkipController::class, 'Ekip_GET']);
    Route::post('/admin/ekip', [EkipController::class, 'Ekip_POST']);

    Route::get('/admin/yonetim-ayarlari', [YonetimAyarlariController::class, 'YonetimAyarlari_GET']);
    Route::post('/admin/yonetim-ayarlari', [YonetimAyarlariController::class, 'YonetimAyarlari_POST']);

    Route::get('/admin/iletisim-ayarlari', [iletisimAyarlariController::class, 'iletisimAyarlari_GET']);
    Route::post('/admin/iletisim-ayarlari', [iletisimAyarlariController::class, 'iletisimAyarlari_POST']);

    Route::get('/admin/anlasmali-kurumlar', [AdminAnlasmaliKurumlarController::class, 'AnlasmaliKurumlar_GET']);
    Route::post('/admin/anlasmali-kurumlar', [AdminAnlasmaliKurumlarController::class, 'AnlasmaliKurumlar_POST']);

    Route::get('/admin/yeni-gelen-mailler', [YeniGelenMaillerController::class, 'YeniGelenMailler_GET']);
    Route::post('/admin/yeni-gelen-mailler', [YeniGelenMaillerController::class, 'YeniGelenMailler_POST']);

    Route::get('/admin/gelen-mailler', [GelenMaillerController::class, 'GelenMailler_GET']);
    Route::post('/admin/gelen-mailler', [GelenMaillerController::class, 'GelenMailler_POST']);

    Route::get('/admin/bekleyen-randevular', [BekleyenRandevularController::class, 'BekleyenRandevular_GET']);
    Route::post('/admin/bekleyen-randevular', [BekleyenRandevularController::class, 'BekleyenRandevular_POST']);

    Route::get('/admin/onaylanan-randevular', [OnaylananRandevularController::class, 'OnaylananRandevular_GET']);
    Route::post('/admin/onaylanan-randevular', [OnaylananRandevularController::class, 'OnaylananRandevular_POST']);

    Route::get('logout', [LoginController::class, 'logout']);
});

