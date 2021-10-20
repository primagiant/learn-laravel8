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
            return redirect('/detail-mahasiswa/' . User::find(Auth::user()->id)->mahasiswa->nim);
        } else if (Auth::user()->hasRole('pa')) {
            return redirect('/detail-pa/' . User::find(Auth::user()->id)->pa->id);
        } else if (Auth::user()->hasRole('admin')) {
            return view('admin.dashboard');
        }
    }
}
