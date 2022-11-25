<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminMasukController;

// Bendahara =================================================================
Route::group(['prefix' => 'admin'], function(){
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/data-masuk', AdminMasukController::class);
    Route::resource('/kegiatan', KegiatanController::class);
});