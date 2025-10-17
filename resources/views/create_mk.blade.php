@extends('layouts.app')

@section('title', 'Tambah Mata Kuliah')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center">Form Tambah Mata Kuliah</h2>

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="nama_mk" class="form-label fw-semibold">Nama Mata Kuliah</label>
            <input type="text" id="nama_mk" name="nama_mk" class="form-control form-control-lg shadow-sm" placeholder="Masukkan nama mata kuliah" required>
        </div>

        <div class="mb-4">
            <label for="sks" class="form-label fw-semibold">Jumlah SKS</label>
            <input type="number" id="sks" name="sks" class="form-control form-control-lg shadow-sm" placeholder="Masukkan jumlah SKS" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('matakuliah.index') }}" class="btn btn-outline-secondary btn-lg">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
            <button type="submit" class="btn btn-pink btn-lg shadow-sm">
                <i class="bi bi-save-fill"></i> Simpan Data
            </button>
        </div>
    </form>
</div>
@endsection
