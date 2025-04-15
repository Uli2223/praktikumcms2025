<h1>Daftar Karyawan</h1>

<a href="{{ route('karyawan.create') }}">Tambah Karyawan</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Menu</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($karyawan as $k)
            <tr>
                <td>{{ $k['NAMA_KARYAWAN'] }}</td>
                <td>{{ $k['JABATAN'] }}</td>
                <td>
                    <a href="{{ route('karyawan.show', $k['ID_KARYAWAN']) }}">Detail</a> |
                    <a href="{{ route('karyawan.edit', $k['ID_KARYAWAN']) }}">Edit</a> |
                    <form action="{{ route('karyawan.destroy', $k['ID_KARYAWAN']) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
