<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function portofolio()
    {
        return view('admin.portofolio');
    }

    public function user()
    {
        return view('admin.user');
    }

    public function kegiatan()
    {
        return view('admin.kegiatan');
    }
}
