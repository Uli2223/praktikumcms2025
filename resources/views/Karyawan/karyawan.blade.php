@extends('layouts.app')

@section('content')
<section class="container mt-5">
  <h1 class="mb-4">Data Karyawan</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Udin</td>
        <td>Admin</td>
        <td>udin@example.com</td>
      </tr>
      <tr>
        <td>Siti</td>
        <td>Kasir</td>
        <td>siti@example.com</td>
      </tr>
    </tbody>
  </table>
</section>
@endsection
