<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('mahasiswa')) {
            return view('mahasiswa.dashboard');
        } else if (Auth::user()->hasRole('pa')) {
            return view('pa.dashboard');
        } else if (Auth::user()->hasRole('admin')) {
            return view('admin.dashboard');
        }
    }
}
