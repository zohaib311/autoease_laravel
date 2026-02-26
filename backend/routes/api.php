<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShirtController;


Route::get('/getShirts', [ShirtController::class, 'getApi']);
Route::get('/deleteShirts/{id}', [ShirtController::class, 'deleteApi']);
