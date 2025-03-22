<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataGuru\GuruController;
use App\Http\Controllers\Admin\DataSiswa\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
Route::resource('data-siswa', SiswaController::class);
Route::resource('data-guru', GuruController::class);