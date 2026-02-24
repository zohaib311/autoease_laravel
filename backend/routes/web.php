<?php

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