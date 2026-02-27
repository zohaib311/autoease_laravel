<?php

use App\Http\Controllers\ShirtController;
// use App\Http\Controllers\ShirtController as ControllersShirtController;
use App\Http\Controllers\ViewController;

use Illuminate\Support\Facades\Route;

/** 
 ** basic routes
 **/

Route::get('/', function () {
    return view('welcome');
})->name('homePage');



/**
 ** Route from Controller
 **/

Route::get('/about', [ViewController::class, 'index'])->name('aboutPage');

//  Route::get('/insert', [ShirtController::class, 'insert']);
//  Route::get('/get', [ShirtController::class, 'get']);
//  Route::get('/get/{id}', [ShirtController::class, 'getById']);
//  Route::get('/update/{id}', [ShirtController::class, 'update']);
//  Route::get('/delete/{id}', [ShirtController::class, 'delete']);

//  Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('shirts', ShirtAdminController::class)->except('show');
//  });

Route::prefix('admin')->group(function () {
    Route::view('/dashboard', 'admin.layout.pages.dashboard')->name('admin');
    Route::get('/product', [ShirtController::class, 'get'])->name('products');
    Route::get('/product/{id}/edit', [ShirtController::class, 'edit'])->name('product.edit');
    Route::post('/product/{id}/update', [ShirtController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}', [ShirtController::class, 'delete'])->name('product.delete');
});

Route::post('/product/item/insert', [ShirtController::class, 'insert']);

Route::fallback(function () {
    return view("error.404");
});
