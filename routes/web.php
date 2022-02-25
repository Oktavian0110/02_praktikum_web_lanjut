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
    return "Selamat Datang";
    });

Route::get('/about', function () {
     return "NIM : 2041720208, <br> NAMA : Oktavian Vandi Tri Shakti <br> KELAS : 2C";
    });

Route::get('/articles/{id}', function ($id) {
    return "Halaman artikel dengan ID" .$id;
    });