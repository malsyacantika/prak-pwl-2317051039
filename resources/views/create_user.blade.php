@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center fw-bold" style="color: #ff69b4;">Buat Pengguna Baru</h1>
    <div class="card shadow-lg border-0" style="border-radius: 15px;">
        <div class="card-body" style="background-color: #fff0f5; border-radius: 15px;">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold" style="color: #e75480;">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control border-2" placeholder="Masukkan nama" style="border-color: #ffb6c1;">
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label fw-semibold" style="color: #e75480;">NPM</label>
                    <input type="text" id="nim" name="nim" class="form-control border-2" placeholder="Masukkan NPM" style="border-color: #ffb6c1;">
                </div>

                <div class="mb-4">
                    <label for="kelas" class="form-label fw-semibold" style="color: #e75480;">Kelas</label>
                    <select id="kelas" name="kelas_id" class="form-select border-2" style="border-color: #ffb6c1;">
                        @foreach($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-center gap-2">
                    <button type="submit" class="btn text-white fw-semibold" 
                        style="background-color: #ff69b4; border-radius: 8px; padding: 8px 20px; border: none; transition: 0.3s;">
                        Submit
                    </button>
                    <a href="{{ url()->previous() }}" class="btn text-white fw-semibold"
                        style="background-color: #e75480; border-radius: 8px; padding: 8px 20px; border: none; transition: 0.3s;">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<style>
.btn:hover {
    opacity: 0.85;
    transform: scale(1.03);
}
</style>
@endsection