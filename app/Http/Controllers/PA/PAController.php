<?php

namespace App\Http\Controllers\PA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PAController extends Controller
{

    public function mahasiswa()
    {
        return view('pa.mahasiswa');
    }

    public function validasi()
    {
        //
    }
}
