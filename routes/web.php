<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;


Route::namespace('authentication')->group(function () {
    Route::post("/", [AuthController::class,"login"])->name("login");
    Route::get('register' , [AuthController::class , 'register'])->name('register');
    Route::post('register', [AuthController::class ,'registrate'])->name('registrate');
});

Route::namespace('dashboard')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
    });
});
