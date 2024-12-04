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
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/mendoan', function () {
    return view('mendoan');
});

Route::get('/ts', function () {
    return view('ts');
});

Route::get('/rekomendasi', function () {
    return view('rekomendasi');
});

Route::get('/jensud', function () {
    return view('jensud');
});

Route::get('/home', function () {
    return view('index');
});


Route::get('/wayang', function () {
    return view('wayang');
});