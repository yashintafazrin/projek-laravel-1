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
    return view('welcome');
});

Route::get('/home', function () {
    return view('blog/home');
});

Route::get('/profil', function () {
    return view('blog/profil');
});

Route::get('/portofolio', function () {
    return view('blog/portofolio');
});

Route::get('/experience', function () {
    return view('blog/experience');
});





