<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;


Route::namespace('authentication')->group(function () {
    Route::get("/", [AuthController::class,"login"])->name("login");
    Route::get('register' , [AuthController::class , 'register'])->name('register');
    Route::post('register', [AuthController::class ,'registrate'])->name('registrate');
});
