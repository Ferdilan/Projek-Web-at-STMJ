<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\PembayaranController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');

Route::group(['middleware' => ['auth','ceklevel:admin,pelanggan']], function () {
Route::resource('/tagihan', TagihanController::class);
});

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    Route::resource('/pembayaran', PembayaranController::class);
    // Route::get('/pembayaran/cetak', PembayaranController::class, 'cetak')->name('cetak');
});