<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminMasukController;

// Bendahara =================================================================
Route::group(['prefix' => 'admin'], function(){
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/data-masuk', AdminMasukController::class)->parameters([
        'data_masuk' => 'data_masuk'
    ]);
});
