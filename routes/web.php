<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Customer\CustomersController;
use App\Http\Controllers\Dashboard\Midicines\MedicinesController;
use App\Http\Controllers\Dashboard\Midicines\MedicinesStockController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\SuppliersController;

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
        Route::prefix('medicines')->group(function(){
            Route::get('/' , [MedicinesController::class,'index'])->name('medicines');

            Route::get('add' , [MedicinesController::class,'add'])->name('add-medicine');
            Route::post('add' , [MedicinesController::class,'store'])->name('store-medicine');

            Route::get('edit/{id}', [MedicinesController::class,'edit'])->name('edit-medicine');
            Route::post('update/{id}', [MedicinesController::class,'update'])->name('update-medicine');

            Route::get('delete/{id}' , [MedicinesController::class,'delete'])->name('delete-medicine');
        });
        Route::prefix('medicines_stock')->group(function(){
            Route::get('/' , [MedicinesStockController::class,'index'])->name('medicines-stock');

            Route::get('add' , [MedicinesStockController::class,'add'])->name('add-medicine-stock');
            Route::post('add' , [MedicinesStockController::class,'store'])->name('store-medicine-stock');

            Route::get('edit/{id}', [MedicinesStockController::class,'edit'])->name('edit-medicine-stock');
            Route::post('update/{id}', [MedicinesStockController::class,'update'])->name('update-medicine-stock');

            Route::get('delete/{id}' , [MedicinesStockController::class,'delete'])->name('delete-medicine-stock');
        });
        Route::prefix('suppliers')->group(function(){
            Route::get('/' , [SuppliersController::class,'index'])->name('suppliers');

            Route::get('add' , [SuppliersController::class,'add'])->name('add-suppliers');
            Route::post('add' , [SuppliersController::class,'store'])->name('store-suppliers');

            Route::get('edit/{id}', [SuppliersController::class,'edit'])->name('edit-suppliers');
            Route::post('update/{id}', [SuppliersController::class,'update'])->name('update-suppliers');

            Route::get('delete/{id}' , [SuppliersController::class,'delete'])->name('delete-suppliers');
        });
        Route::prefix('invoices')->group(function(){
            Route::get('/' , [InvoicesController::class,'index'])->name('invoices');

            Route::get('add' , [InvoicesController::class,'add'])->name('add-invoices');
            Route::post('add' , [InvoicesController::class,'store'])->name('store-invoices');

            Route::get('edit/{id}', [InvoicesController::class,'edit'])->name('edit-invoices');
            Route::post('update/{id}', [InvoicesController::class,'update'])->name('update-invoices');

            Route::get('delete/{id}' , [InvoicesController::class,'delete'])->name('delete-invoices');
        });
        Route::prefix('purchases')->group(function(){
            Route::get('/' , [PurchasesController::class,'index'])->name('purchases');

            Route::get('add' , [PurchasesController::class,'add'])->name('add-purchases');
            Route::post('add' , [PurchasesController::class,'store'])->name('store-purchases');

            Route::get('edit/{id}', [PurchasesController::class,'edit'])->name('edit-purchases');
            Route::post('update/{id}', [PurchasesController::class,'update'])->name('update-purchases');

            Route::get('delete/{id}' , [PurchasesController::class,'delete'])->name('delete-purchases');
        });
    });
});

Route::namespace('homepage')->group(function(){
    Route::prefix('home')->group(function(){
        Route::get('/' , [HomeController::class,'index'])->name('home');
    });
});





// the last commit, project has ended up,
// be careful of yourself
