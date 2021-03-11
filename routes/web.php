<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes ( pages link )
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/about', function () {
    return view('index');
});

Route::get('contact', 'ContactController@create');

Route::post('contact', 'ContactController@store');


Route::get('/index', function () {
    return view('index');
});

Route::get('/community', function () {
    return view('community');
});

Route::get('/team', function () {
    return view('team');
});


Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/contact2', function () {
    return view('contact2');
});

Route::get('/donate', function () {
    return view('donate');
});



//Route::get('/profile', function () {
  //  return view('profile');
//});

Route::view("contact",'contact'); 
Route::view("profile",'profile'); 
//Route:get('/contact',[ContactController::class,'contact']);   //contact-form & contact function 
//Route::post('/send-message',[ContactController::class,'sendEmail'])->name(contact.send);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
