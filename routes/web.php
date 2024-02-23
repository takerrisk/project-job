<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
    
Route::get('home', function () {
    return view('home');
});

Route::get('service', function () {
    return view('service');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('aboutus', function () {
    return view('aboutus');
});

Route::get('logout', function () {
    return view('logout');
});
