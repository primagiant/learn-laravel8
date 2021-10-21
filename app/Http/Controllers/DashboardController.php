<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('mahasiswa')) {
            return redirect('/detail-mahasiswa');
        } else if (Auth::user()->hasRole('pa')) {
            return redirect('/detail-pa');
        } else if (Auth::user()->hasRole('admin')) {
            return view('admin.dashboard');
        }
    }
}
