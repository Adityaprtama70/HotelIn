<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return redirect()->route('hotel');
});

Route::get('/hotel', function () {
    return view('pages.index');
})->name('hotel');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/contact', function () {
    return view('pages.contactPage');
})->name('contact');

Route::get('/singleRoom', function () {
    return view('pages.singleRoomDetails');
})->name('singleroom');