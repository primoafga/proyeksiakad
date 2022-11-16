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

Route::get('/login', function () {
    return view('login');
});

Route::get('/indexguru', function () {
    return view('indexguru');
});

Route::get('/indexsiswa', function () {
    return view('indexsiswa');
});

Route::get('/kelas', function () {
    return view('kelas');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/indexadminsiswa', function () {
    return view('indexadminsiswa');
});

Route::get('/indexadminguru', function () {
    return view('indexadminguru');
});

Route::get('/setingguru', function () {
    return view('setingguru');
});

Route::get('/registersiswa', function () {
    return view('registersiswa');
});

Route::get('/registerguru', function () {
    return view('registerguru');
});

Route::get('/coba', function () {
    return view('coba');
});
