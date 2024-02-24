<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\JadwalpiketController;
use App\Http\Controllers\CatatankerjaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\profilController;

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

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
});

route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,karyawan']], function () {
    route::get('/home',[HomeController::class,'index'])->name('home'); 
    route::get('/profil',[profilController::class,'index'])->name('profil');   
    Route::patch('/update-password', [UserController::class,'updatePassword'])->name('update-password'); 
   
});

Route::group(['middleware' => ['auth','ceklevel:karyawan']], function () {
    route::post('/simpan-masuk',[PresensiController::class,'store'])->name('simpan-masuk');
    route::post('/simpan-masuk',[PresensiController::class,'validasiQrcode'])->name('simpan-masuk');
    route::get('/presensi-masuk',[PresensiController::class,'index'])->name('presensi-masuk');    
    route::get('/presensi-keluar',[PresensiController::class,'keluar'])->name('presensi-keluar');   
    Route::post('ubah-presensi',[PresensiController::class,'presensipulang'])->name('ubah-presensi');
    Route::get('filter-data',[PresensiController::class,'halamanrekap'])->name('filter-data'); 
    Route::get('filter-data/{tglawal}/{tglakhir}',[PresensiController::class,'tampildatakeseluruhan'])->name('filter-data-keseluruhan'); 
    route::post('validasi/qrcode',[PresensiController::class,'validasiQrcode'])->name('validasiqrcode');
});

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    Route::get('filter-data-karyawan',[PresensiController::class,'adminhalamanrekap'])->name('data-karyawan'); 
    Route::get('filter-data-karyawan/{tglawal}/{tglakhir}',[PresensiController::class,'admintampildatakeseluruhan'])->name('filter-data-keseluruhan');
    Route::get('/cetak-laporan', [PresensiController::class, 'cetakLaporan'])->name('cetak-laporan');
});

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    Route::get('/qrcode/qr', [UserController::class, 'index']);
    Route::post('/qrcode/qr', [UserController::class, 'store'])->name('store');
    Route::get('qrcode/qrcode/{id}', [UserController::class, 'generate'])->name('generate');
    Route::delete('qrcode/qr/{id}', [UserController::class, 'hapus'])->name('hapus');
    Route::resource('user', UserController::class);
});

Route::resource('/pengumuman', PengumumanController::class)->middleware('auth');

Route::resource('/catatankerja', CatatankerjaController::class)->middleware('auth');

Route::resource('/jadwalpiket', JadwalpiketController::class)->middleware('auth');
Route::put('/update', [ JadwalpiketController::class, 'update'])->middleware('auth');

Route::resource('/cuti', CutiController::class)->middleware('auth');
Route::post('/cuti/status/{id}', [CutiController::class,'status']);