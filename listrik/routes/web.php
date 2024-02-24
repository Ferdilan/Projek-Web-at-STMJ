<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\datatagihanController;

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

Route::group(['middleware' => ['auth','ceklevel:admin,user']], function () {
Route::get('/home', [HomeController::class, 'index']);
});

// Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
Route::resource('/tagihan', TagihanController::class,);
Route::resource('datatagihan', datatagihanController::class);
Route::resource('/pembayaran', PembayaranController::class);
// });

Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
// route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
// route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
// route::get('/logout',[LoginController::class,'logout'])->name('logout');
// route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
// route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');