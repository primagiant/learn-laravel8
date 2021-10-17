<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JenisKegiatan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function portofolio()
    {
        return view('admin.portofolio');
    }

    public function user()
    {
        $users = User::paginate(5);

        $arr = [];
        foreach ($users as $user) {
            array_push($arr, [
                "name" => $user['name'],
                "email" => $user['email'],
                "role" => User::find($user['id'])->roles->toArray()[0]['display_name'],
            ]);
        };

        return view('admin.user', [
            'users' => $arr,
            ''
        ]);
    }

    public function kegiatan()
    {
        $jenis_kegiatan = JenisKegiatan::paginate(5);
        return view('admin.kegiatan', [
            'jenis_kegiatan' => $jenis_kegiatan,
        ]);
    }
}
