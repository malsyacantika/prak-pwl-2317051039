<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function profile($nama = "Lutfi Harya Ferdian", $npm = "2317051096", $kelas = "D"){
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas,    
            ];
        return view('profile', $data);
    }
}