<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BendaharaMasukController;

// Bendahara =================================================================
Route::group(['prefix' => 'bendahara'], function(){
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/data-masuk', BendaharaMasukController::class);
});