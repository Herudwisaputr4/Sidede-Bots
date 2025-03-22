<?php

use App\Http\Controllers\MasterAdmin\DashboardController;
use App\Http\Controllers\MasterAdmin\DataAdmin\AdminController;
use App\Http\Controllers\MasterAdmin\DataSekolah\SekolahController;
use App\View\Components\MasterAdmin;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [DashboardController::class, 'index']);
Route::resource('data-sekolah', SekolahController::class);
Route::resource('data-admin', AdminController::class);



