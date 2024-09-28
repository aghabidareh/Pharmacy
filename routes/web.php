<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Customer\CustomersController;

Route::namespace('authentication')->group(function () {
    Route::get("/", [AuthController::class,"login"])->name("login");
    Route::post('check' , [AuthController::class,'check'])->name('check');
    Route::get('register' , [AuthController::class , 'register'])->name('register');
    Route::post('register', [AuthController::class ,'registrate'])->name('registrate');
});


Route::namespace('dashboard')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
        Route::prefix('customers')->group(function(){
            Route::get('/' , [CustomersController::class,'index'])->name('customers');

            Route::get('add' , [CustomersController::class,'add'])->name('add-customer');
            Route::post('add' , [CustomersController::class,'store'])->name('store-customer');

            Route::get('edit/{id}', [CustomersController::class,'edit'])->name('edit-customer');
            Route::post('update/{id}', [CustomersController::class,'update'])->name('update-customer');

            Route::get('delete/{id}' , [CustomersController::class,'delete'])->name('delete-customer');
        });
    });
});

Route::namespace('homepage')->group(function(){
    Route::prefix('home')->group(function(){
        Route::get('/' , [HomeController::class,'index'])->name('home');
    });
});
