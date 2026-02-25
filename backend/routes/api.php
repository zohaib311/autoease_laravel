<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShirtController;


Route::get('/getShirts', [ShirtController::class, 'getApi']);
