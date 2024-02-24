<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputDataSiswaController;
use App\Http\Controllers\TransaksiSppController;
use App\Http\Controllers\TransaksiDaftarUlangController;
use App\Http\Controllers\InputSiswaController;

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
Route::resource('/inputdatasiswa', InputDataSiswaController::class);
Route::resource('/transaksispp', TransaksiSppController::class);
Route::resource('/transaksidu', TransaksiDaftarUlangController::class);
Route::resource('/inputsiswa', InputSiswaController::class);
