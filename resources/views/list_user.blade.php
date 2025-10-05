@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-6">
    <h1 class="text-center fw-bold mb-5" style="color: #ff69b4;">Daftar User</h1>

    <div class="card shadow-lg border-0" style="border-radius: 20px; background: linear-gradient(135deg, #ffe6f0, #fff0f5);">
        <div class="card-body p-4" style="border-radius: 20px;">
            @if($users->isEmpty())
                <p class="text-center fw-semibold" style="color: #e75480;">Belum ada data pengguna.</p>
            @else
                {{-- Komponen tabel user --}}
                @include('components.user-table', ['users' => $users])
            @endif
        </div>
    </div>
</div>

<style>
.card {
    transition: all 0.3s ease;
}
.card:hover {
    transform: scale(1.01);
    box-shadow: 0 10px 20px rgba(255, 182, 193, 0.5);
}
h1 {
    letter-spacing: 1px;
    font-family: 'Poppins', sans-serif;
}
</style>
@endsection
