<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ScanController;

Route::get('/', [PagesController::class, 'dashboard']);
// DATA siswa
Route::get('/siswa', [SiswaController::class,'index']);
Route::get('/tambah-siswa', [SiswaController::class,'create']);
Route::get('/edit-siswa/{id}', [SiswaController::class,'edit']);
Route::post('/postsiswa', [SiswaController::class,'store']);
Route::post('/editsiswa', [SiswaController::class,'update']);
Route::get('/hapus-siswa/{id}', [SiswaController::class,'destroy']);

// DATA ABSEN 
Route::get('/absensi', [PagesController::class, 'absensi']);

// PRESENSI
Route::get('/scan', [PagesController::class,'scan_absen']);

// FUNGSI REALTIME
Route::get('/reader', [PagesController::class,'reader']);
Route::get('/nokartu', [PagesController::class,'nokartu']);


// FUNGSI GET LINK ARDUINO
Route::get('/postkartu/{id}', [PagesController::class,'temp']);
Route::get('/mode', [PagesController::class,'mode']);




