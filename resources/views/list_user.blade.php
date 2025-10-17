@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="fw-bold text-dark mb-3 text-center">Daftar Mahasiswa</h2>
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3 rounded-pill">+ Tambah Mahasiswa</a>

    <table class="table table-bordered text-center align-middle">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->nama_kelas }}</td>
                <td>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm rounded-pill">Edit</a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm rounded-pill"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@if(session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Berhasil!',
    text: "{{ session('success') }}",
    showConfirmButton: false,
    timer: 2000
});
</script>
@endif
@endsection
