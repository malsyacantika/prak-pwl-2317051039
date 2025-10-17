<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;

class UserController extends Controller
{
    protected $userModel;
    protected $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    // 🔹 Tampilkan semua user
    public function index()
    {
        $users = $this->userModel->getUser();
        $kelas = $this->kelasModel->getKelas();

        return view('list_user', compact('users', 'kelas'));
    }

    // 🔹 Halaman form tambah user
    public function create()
    {
        $kelas = $this->kelasModel->getKelas();
        return view('create_user', compact('kelas'));
    }

    // 🔹 Simpan user baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20|unique:users,npm',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $this->userModel->create([
            'nama' => $request->nama,
            'npm' => $request->npm,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('user.index')->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    // 🔹 Halaman edit user
    public function edit($id)
    {
        $user = $this->userModel->findOrFail($id);
        $kelas = $this->kelasModel->getKelas();

        return view('edit_user', compact('user', 'kelas'));
    }

    // 🔹 Update data user
    public function update(Request $request, $id)
    {
        $user = $this->userModel->findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20|unique:users,npm,' . $id,
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $user->update([
            'nama' => $request->nama,
            'npm' => $request->npm,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('user.index')->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    // 🔹 Hapus user
    public function destroy($id)
    {
        $user = $this->userModel->findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
