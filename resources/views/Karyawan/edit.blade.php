<h1>Edit Karyawan</h1>

<form method="POST" action="{{ route('karyawan.edit', $karyawan['ID_KARYAWAN']) }}">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td><label for="NAMA_KARYAWAN">Nama</label></td>
            <td><input type="text" name="NAMA_KARYAWAN" value="{{ $karyawan['NAMA_KARYAWAN'] }}"></td>
        </tr>
        <tr>
            <td><label for="JABATAN">Jabatan</label></td>
            <td><input type="text" name="JABATAN" value="{{ $karyawan['JABATAN'] }}"></td>
        </tr>
        <tr>
            <td><label for="ALAMAT">Alamat</label></td>
            <td><input type="text" name="ALAMAT" value="{{ $karyawan['ALAMAT'] }}"></td>
        </tr>
        <tr>
            <td><label for="NOMOR_TELEPON">Telepon</label></td>
            <td><input type="text" name="NOMOR_TELEPON" value="{{ $karyawan['NOMOR_TELEPON'] }}"></td>
        </tr>
    </table>
    <br>
    <button type="submit">Update</button>
    <a href="{{ route('karyawan.index') }}">Kembali</a>
</form>
