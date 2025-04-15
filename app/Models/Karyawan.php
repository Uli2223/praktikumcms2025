<?php

namespace App\Models;

class Karyawan
{
    // Data dummy karyawan (static supaya bisa diakses tanpa instance)
    private static $data = [
        [
            'ID_KARYAWAN' => 1,
            'NAMA_KARYAWAN' => 'Marsha Aranta',
            'JABATAN' => 'Kasir',
            'ALAMAT' => 'Jl. Merdeka No.1',
            'NOMOR_TELEPON' => '08123456756',
        ],
        [
            'ID_KARYAWAN' => 2,
            'NAMA_KARYAWAN' => 'Teku Arasya',
            'JABATAN' => 'Baker',
            'ALAMAT' => 'Jl. Pamungkas No.1',
            'NOMOR_TELEPON' => '081233246789',
        ],
        [
            'ID_KARYAWAN' => 2,
            'NAMA_KARYAWAN' => 'Kania Ayu Sinta',
            'JABATAN' => 'Pelayan',
            'ALAMAT' => 'Jl. Sudirman No.12',
            'NOMOR_TELEPON' => '08234567890',
        ]
    ];

    // Mengambil semua data karyawan
    public static function getAllKaryawan()
    {
        return self::$data;
    }

    // Mencari karyawan berdasarkan ID
    public static function find($id)
    {
        foreach (self::$data as $karyawan) {
            if ($karyawan['ID_KARYAWAN'] == $id) {
                return $karyawan;
            }
        }
        return null;
    }

    // Menambahkan data karyawan
    public static function create($data)
    {
        $newId = count(self::$data) + 1;
        $data['ID_KARYAWAN'] = $newId;
        self::$data[] = $data;
        return true;
    }

    // Memperbarui data karyawan berdasarkan ID
    public static function update($id, $data)
    {
        foreach (self::$data as $index => $karyawan) {
            if ($karyawan['ID_KARYAWAN'] == $id) {
                $data['ID_KARYAWAN'] = $id; // Pastikan ID tidak berubah
                self::$data[$index] = array_merge($karyawan, $data);
                return true;
            }
        }
        return false;
    }

    // Menghapus data karyawan berdasarkan ID
    public static function destroy($id)
    {
        foreach (self::$data as $index => $karyawan) {
            if ($karyawan['ID_KARYAWAN'] == $id) {
                unset(self::$data[$index]);
                self::$data = array_values(self::$data); // Reset index array
                return true;
            }
        }
        return false;
    }
}
