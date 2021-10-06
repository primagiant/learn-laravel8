<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
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
        return view('mahasiswa.kegiatan');
    }
}
