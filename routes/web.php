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

// Tambahkan route untuk karyawan
Route::get('/karyawan', function () {
    // Simulasi data karyawan (nantinya bisa diambil dari database)
    $karyawan = [
        ['id' => 1, 'nama' => 'John Doe', 'jabatan' => 'Manager', 'departemen' => 'IT'],
        ['id' => 2, 'nama' => 'Jane Smith', 'jabatan' => 'Developer', 'departemen' => 'IT'],
        ['id' => 3, 'nama' => 'Bob Johnson', 'jabatan' => 'Designer', 'departemen' => 'Kreatif'],
    ];
    
    return view('karyawan.index', compact('karyawan'));
});
Route::get('/karyawan/create', function () {
    return view('karyawan.create');
});

Route::get('/karyawan/{id}/edit', function ($id) {
    // Simulasi data karyawan
    $karyawan = [
        'id' => $id, 
        'nama' => 'John Doe', 
        'jabatan' => 'Manager', 
        'departemen' => 'IT'
    ];
    
    return view('karyawan.edit', compact('karyawan'));
});