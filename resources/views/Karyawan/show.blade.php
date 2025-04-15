<h1>Detail Karyawan</h1>

<table>
    <tr>
        <td><strong>Nama</strong></td>
        <td>: {{ $karyawan['NAMA_KARYAWAN'] }}</td>
    </tr>
    <tr>
        <td><strong>Jabatan</strong></td>
        <td>: {{ $karyawan['JABATAN'] }}</td>
    </tr>
    <tr>
        <td><strong>Alamat</strong></td>
        <td>: {{ $karyawan['ALAMAT'] }}</td>
    </tr>
    <tr>
        <td><strong>Nomor Telepon</strong></td>
        <td>: {{ $karyawan['NOMOR_TELEPON'] }}</td>
    </tr>
</table>

<br>
<a href="{{ route('karyawan.index') }}">Kembali</a>
