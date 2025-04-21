<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/halaman', function () {
    return view('dashboard'); // Ganti dengan view halaman jika sudah ada
});

Route::get('/artikel', function () {
    return view('dashboard'); // Ganti dengan view artikel jika sudah ada
});