@extends('layouts.main')

@section('title', 'Tambah Karyawan')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Karyawan</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{ url('/karyawan') }}" class="btn btn-sm btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Karyawan</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="#">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
            </div>
            <div class="mb-3">
                <label for="departemen" class="form-label">Departemen</label>
                <select class="form-select" id="departemen" name="departemen" required>
                    <option value="">Pilih Departemen</option>
                    <option value="IT">IT</option>
                    <option value="Kreatif">Kreatif</option>
                    <option value="HRD">HRD</option>
                    <option value="Keuangan">Keuangan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection