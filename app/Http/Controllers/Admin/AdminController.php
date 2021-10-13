<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $users = User::all();

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
        return view('admin.kegiatan');
    }
}
