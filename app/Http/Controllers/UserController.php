<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;

class UserController extends Controller
{
    public function index()
    {
        $users = UserModel::join('kelas', 'kelas.id', '=', 'user.kelas_id')
            ->select('user.*', 'kelas.nama_kelas')
            ->get();

        return view('list_user', [
            'title' => 'Daftar User',
            'users' => $users
        ]);
    }

    public function create()
    {
        $kelas = Kelas::all();

        return view('create_user', [
            'title' => 'Create User',
            'kelas' => $kelas
        ]);
    }

    public function store(Request $request)
    {
        UserModel::create([
            'nama' => $request->nama,
            'nim'  => $request->npm,     // kolom di DB nim, input di form npm
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect('/user')->with('success', 'User berhasil ditambahkan!');
    }
}
