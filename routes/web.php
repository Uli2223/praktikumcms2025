<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;


Route::get('/', function () {
    return view('welcome');
});

// Grup rute untuk Karyawan
Route::prefix('karyawan')->name('karyawan.')->group(function () {
    // Menampilkan daftar karyawan
    Route::get('/', [KaryawanController::class, 'index'])->name('index');
    
    // Menampilkan detail karyawan berdasarkan ID
    Route::get('show/{id}', [KaryawanController::class, 'show'])->name('show');
    
    // Menampilkan form tambah karyawan
    Route::get('create', [KaryawanController::class, 'create'])->name('create');
    // Menyimpan karyawan baru
    Route::post('create', [KaryawanController::class, 'store']);
    
    // Menampilkan form edit karyawan berdasarkan ID
    Route::get('edit/{id}', [KaryawanController::class, 'edit'])->name('edit');
    // Menyimpan perubahan karyawan berdasarkan ID
    Route::put('edit/{id}', [KaryawanController::class, 'update'])->name('update');

    
    // Menghapus karyawan berdasarkan ID
    Route::delete('/{id}', [KaryawanController::class, 'destroy'])->name('destroy');
    
    Route::get('/', function () {
        return view('home');
    });
    
    Route::get('/karyawan', function () {
        return view('karyawan');
    });
    
});
