<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Angkatan;
use App\Models\Fakultas;
use App\Models\JenisKegiatan;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

class AdminController extends Controller
{
    public function portofolio()
    {
        dd(Mahasiswa::find(1)->angkatan());
        return view('admin.portofolio');
    }

    // User
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

    // Kegiatan
    public function kegiatan()
    {
        $jenis_kegiatan = JenisKegiatan::paginate(5);
        return view('admin.kegiatan', [
            'jenis_kegiatan' => $jenis_kegiatan,
        ]);
    }

    // Fakultas
    public function fakultas()
    {
        $fakultas = Fakultas::all();
        return view('admin.fakultas', [
            'fakultas' => $fakultas,
        ]);
    }

    public function addFakultas()
    {
        return view('admin.fakultas.add');
    }

    public function saveFakultas(Request $req)
    {
        $name = ucwords($req->displayName);
        $name = str_replace(" ", "", $name);
        $name = lcfirst($name);
        Fakultas::create([
            'name' => $name,
            'display_name' => $req->displayName,
            'description' => $req->deskripsi,
        ]);
        return redirect('/admin-fakultas');
    }

    public function editFakultas(Request $req)
    {
        $fakultas = Fakultas::find($req->id);
        return view('admin.fakultas.edit', [
            'id' => $fakultas['id'],
            'display_name' => $fakultas['display_name'],
            'deskripsi' => $fakultas['description'],
        ]);
    }

    public function updateFakultas(Request $req)
    {
        $name = ucwords($req->displayName);
        $name = str_replace(" ", "", $name);
        $name = lcfirst($name);
        $fakultas = Fakultas::find($req->id);
        $fakultas->name = $name;
        $fakultas->display_name = $req->display_name;
        $fakultas->description = $req->description;
        $fakultas->save();
        return redirect('/admin-fakultas');
    }

    public function destroyFakultas(Request $req)
    {
        Fakultas::destroy($req->id);
        return back();
    }

    // Prodi
    public function prodi()
    {
        $prodi = Prodi::all();
        return view('admin.prodi', [
            'prodi' => $prodi,
        ]);
    }

    public function addProdi()
    {
        return view('admin.prodi.add');
    }

    public function saveProdi(Request $req)
    {
        Prodi::create([
            'tahun' => $req->tahun,
        ]);
        return redirect('/admin-prodi');
    }

    public function editProdi(Request $req)
    {
        $Prodi = Prodi::find($req->id);
        return view('admin.prodi.edit', [
            'tahun' => $Prodi['tahun'],
            'id' => $Prodi['id']
        ]);
    }

    public function updateProdi(Request $req)
    {
        $Prodi = Prodi::find($req->id);
        $Prodi->tahun = $req->tahun;
        $Prodi->save();
        return redirect('/admin-prodi');
    }

    public function destroyProdi(Request $req)
    {
        Prodi::destroy($req->id);
        return back();
    }

    // Angkatan
    public function angkatan()
    {
        $angkatan = Angkatan::all();
        return view('admin.angkatan', [
            'angkatan' => $angkatan,
        ]);
    }

    public function addAngkatan()
    {
        return view('admin.angkatan.add');
    }

    public function saveAngkatan(Request $req)
    {
        Angkatan::create([
            'tahun' => $req->tahun,
        ]);
        return redirect('/admin-angkatan');
    }

    public function editAngkatan(Request $req)
    {
        $angkatan = Angkatan::find($req->id);
        return view('admin.angkatan.edit', [
            'tahun' => $angkatan['tahun'],
            'id' => $angkatan['id']
        ]);
    }

    public function updateAngkatan(Request $req)
    {
        $angkatan = Angkatan::find($req->id);
        $angkatan->tahun = $req->tahun;
        $angkatan->save();
        return redirect('/admin-angkatan');
    }

    public function destroyAngkatan(Request $req)
    {
        Angkatan::destroy($req->id);
        return back();
    }
}
