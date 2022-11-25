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
    return view('main.home');
});

Route::get('/layout', function () {
    return view('layout.layout');
});

Route::get('/home', function () {
    return view('main.home');
});

Route::get('/about', function () {
    return view('main.header.about');
});

Route::get('/contact', function () {
    return view('main.header.contact');
});

Route::get('/info', function () {
    return view('main.header.info');
});

Route::get('/potrait', function () {
    return view('main.detail-photo.potrait');
});

Route::get('/urban', function () {
    return view('main.detail-photo.urban');
});

Route::get('/street', function () {
    return view('main.detail-photo.street');
});
