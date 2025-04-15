<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // Menampilkan daftar karyawan
    public function index()
    {
        $karyawan = Karyawan::getAllKaryawan(); // Mengambil semua data karyawan
        return view('karyawan.index', compact('karyawan'));
    }

    // Menampilkan detail karyawan berdasarkan ID
    public function show($id)
    {
        $karyawan = Karyawan::find($id); // Mengambil data karyawan berdasarkan ID
        if ($karyawan) {
            return view('karyawan.show', compact('karyawan'));
        }
        return redirect()->route('karyawan.index')->with('error', 'Karyawan tidak ditemukan');
    }

    // Menampilkan form tambah karyawan
    public function create()
    {
        return view('karyawan.create');
    }

    // Menyimpan data karyawan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'NAMA_KARYAWAN' => 'required',
            'JABATAN' => 'required',
            'ALAMAT' => 'required',
            'NOMOR_TELEPON' => 'required',
        ]);

        Karyawan::create($validated); // Menambahkan data karyawan baru
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    // Menampilkan form edit karyawan berdasarkan ID
    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        if ($karyawan) {
            return view('karyawan.edit', compact('karyawan'));
        }
        return redirect()->route('karyawan.index')->with('error', 'Karyawan tidak ditemukan');
    }

    // Menyimpan perubahan data karyawan berdasarkan ID
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'NAMA_KARYAWAN' => 'required',
            'JABATAN' => 'required',
            'ALAMAT' => 'required',
            'NOMOR_TELEPON' => 'required',
        ]);

        Karyawan::update($id, $validated); // Memperbarui data karyawan
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil diperbarui!');
    }

    // Menghapus karyawan berdasarkan ID
    public function destroy($id)
    {
        Karyawan::destroy($id); // Menghapus data karyawan
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil dihapus!');
    }
}
