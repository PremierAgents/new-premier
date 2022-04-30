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

Route::get('/', function () {
    return view('Home');
});

Route::get('/AboutUs', function () {
    return view('AboutUs');
});

Route::get('/Land', function () {
    return view('Land');
});

Route::get('/House', function () {
    return view('House');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/Blog', function () {
    return view('Blog');
});

Route::get('/AgentFinder', function () {
    return view('AgentFinder');
});

Route::get('/Community', function () {
    return view('Community');
});

Route::get('/ContactUs', function () {
    return view('ContactUs');
});

Route::get('/Privacy', function () {
    return view('Privacy');
});

Route::get('/Terms', function () {
    return view('Terms');
});






