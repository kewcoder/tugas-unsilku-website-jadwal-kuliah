<?php

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
    return view('welcome');
});

Route::get('/skripsi', function () {
    return view('app.skripsi');
});

Route::get('/praktikum', function () {
    return view('app.praktikum');
});

Route::get('/p/detail', function () {
    return view('app.managePraktikum');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
