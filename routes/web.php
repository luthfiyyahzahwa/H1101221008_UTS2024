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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/pegawai', function () {
    return view('pegawai');
})->name('pegawai');

Route::get('/jabatan', function () {
    return view('jabatan');
})->name('jabatan');

Route::get('/pendidikan', function () {
    return view('pendidikan');
})->name('pendidikan');
    
