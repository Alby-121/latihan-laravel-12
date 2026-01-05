<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Halaman pendaftaran user
    public function index()
    {
        return view('form');
    }

    public function proses_tambah(Request $request)
    {
        // $nama = $request->input('nama');
        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'sekolah' => $request->sekolah,
            'kelas' => $request->kelas
        ];

        return view('hasil_form', $data );
    }
}