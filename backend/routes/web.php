<?php

use App\Http\Controllers\Admin\ShirtAdminController;
use App\Http\Controllers\ShirtController;
use App\Http\Controllers\ViewController;

use Illuminate\Support\Facades\Route;

/** 
 ** basic routes
**/

Route::get('/', function () {
    return view('welcome');
})->name('homePage');

// Route::get('/about', function () {
//     return view('pages.about');
// })->name('aboutPage');



/**
 ** Route from Controller
 **/
 
 Route::get('/about', [ViewController::class, 'index'])->name('aboutPage');

 Route::get('/insert', [ShirtController::class, 'insert']);
 Route::get('/get', [ShirtController::class, 'get']);
 Route::get('/get/{id}', [ShirtController::class, 'getById']);
 Route::get('/update/{id}', [ShirtController::class, 'update']);
 Route::get('/delete/{id}', [ShirtController::class, 'delete']);

//  Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('shirts', ShirtAdminController::class)->except('show');
//  });

Route::prefix('admin')->group(function () {
    Route::view('/dashboard', 'admin.layout.pages.dashboard')->name('admin');
    Route::view('/products', 'admin.layout.pages.products')->name('product');
});


// // Routr with data from function using (with)
// Route::get('/about', function () {
//     $name = "Ruman";
//     $email = 'ruman@gmail.com';
//     return view('about')-> with("name", $name)->with("email", $email);
// });



// // Routr with data from function using (compact)
// Route::get('/about', function () {
//     $name = "Ali";
//     $email = 'ali@gmail.com';
//     return view('about', compact("name", "email"));
// });



// // pass data from route with / as a dynamic route
// Route::get('/about/{id}/{name}', function ($id, $name) {
//     return $id .$name;
// });


// pass data from route ti view with / as a dynamic route
// Route::get('/about/{name?}/{email?}', function ( $name = null, $email = null ) {
//     return view("about", compact("name", "email"));
// });


Route::fallback(function(){
 return view("error.404");
});
