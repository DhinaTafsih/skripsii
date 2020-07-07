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
    return view('index');
});

Route::get('/data_CA', function () {
    return view('data_CA');
});

Route::get('/kriteria', function () {
    return view('kriteria');
});

Route::get('/hasil', function () {
    return view('hasil');
});

Route::get('/admin', function () {
    return view('admin');
});
