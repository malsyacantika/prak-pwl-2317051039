@extends('layouts.app')

@section('content')
<div class="center-container">
    <div class="col-lg-5">
        <div class="card p-4">
            <h4 class="text-center mb-4 fw-semibold text-dark">Tambah Mahasiswa Baru</h4>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold text-dark">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="mb-3">
                    <label for="npm" class="form-label fw-semibold text-dark">NPM</label>
                    <input type="text" id="npm" name="npm" class="form-control" placeholder="Masukkan NPM" required>
                </div>

                <div class="mb-4">
                    <label for="kelas_id" class="form-label fw-semibold text-dark">Kelas</label>
                    <select id="kelas_id" name="kelas_id" class="form-select" required>
                        @foreach($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary rounded-pill">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection