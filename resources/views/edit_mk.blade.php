@extends('layouts.app')

@section('content')
<div class="center-container">
    <div class="col-lg-5">
        <div class="card p-4">
            <h4 class="text-center mb-4 fw-semibold text-dark">Edit Mata Kuliah</h4>

            <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_mk" class="form-label fw-semibold text-dark">Nama Mata Kuliah</label>
                    <input type="text" id="nama_mk" name="nama_mk" class="form-control" value="{{ $mk->nama_mk }}" required>
                </div>

                <div class="mb-4">
                    <label for="sks" class="form-label fw-semibold text-dark">SKS</label>
                    <input type="number" id="sks" name="sks" class="form-control" value="{{ $mk->sks }}" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary rounded-pill">Update</button>
                    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary rounded-pill px-4">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection