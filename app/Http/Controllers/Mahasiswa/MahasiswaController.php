<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\JenisKegiatan;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index()
    {
        return view('mahasiswa.dashboard');
    }

    public function portofolio()
    {
        return view('mahasiswa.portofolio');
    }

    public function kegiatan()
    {
        $jenis_kegiatan = JenisKegiatan::paginate(5);
        return view('mahasiswa.kegiatan', [
            'jenis_kegiatan' => $jenis_kegiatan,
        ]);
    }
}
