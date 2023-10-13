<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\PembinaController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[DashboardController::class, 'index']);

Route::get('/profile',[AuthController::class, 'profile']);

Route::prefix('magang')->group(function () {
    Route::get('absensi',[MagangController::class, 'absensi']);
    Route::post('absensi',[MagangController::class, 'absensiSave']);

    Route::get('laporan-harian',[MagangController::class, 'laporanHarian']);
    Route::post('laporan-harian',[MagangController::class, 'laporanHarianSave']);

    Route::get('judul-magang',[MagangController::class, 'judulMagang']);
    Route::post('judul-magang',[MagangController::class, 'judulMagangSave']);
});

Route::prefix('pembina')->group(function () {
    Route::get('penilaian',[PembinaController::class, 'penilaian']);
    Route::post('penilaian',[PembinaController::class, 'penilaianSave']);

    Route::get('sertifikat',[PembinaController::class, 'sertifikat']);
    Route::post('sertifikat',[PembinaController::class, 'sertifikatSave']);
});

Route::prefix('admin')->group(function () {
    Route::get('instansi',[AdminController::class, 'instansi']);
    Route::post('instansi',[AdminController::class, 'instansiSave']);

    Route::get('level',[AdminController::class, 'level']);
    Route::post('level',[AdminController::class, 'levelSave']);

    Route::get('users',[AdminController::class, 'users']);
    Route::post('users',[AdminController::class, 'usersSave']);
});
