<h1>Tambah Karyawan</h1>

<form method="POST" action="{{ route('karyawan.create') }}">
    @csrf
    <table>
        <tr>
            <td><label for="NAMA_KARYAWAN">Nama</label></td>
            <td><input type="text" name="NAMA_KARYAWAN" placeholder="Nama"></td>
        </tr>
        <tr>
            <td><label for="JABATAN">Jabatan</label></td>
            <td><input type="text" name="JABATAN" placeholder="Jabatan"></td>
        </tr>
        <tr>
            <td><label for="ALAMAT">Alamat</label></td>
            <td><input type="text" name="ALAMAT" placeholder="Alamat"></td>
        </tr>
        <tr>
            <td><label for="NOMOR_TELEPON">Telepon</label></td>
            <td><input type="text" name="NOMOR_TELEPON" placeholder="Nomor Telepon"></td>
        </tr>
    </table>
    <br>
    <button type="submit">Simpan</button>
    <a href="{{ route('karyawan.index') }}">Kembali</a>
</form>
