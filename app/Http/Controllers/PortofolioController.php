<?php

namespace App\Http\Controllers;

use App\Models\JenisKegiatan;
use App\Models\Mahasiswa;
use App\Models\Portofolio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortofolioController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('mahasiswa')) {
            $mhs_id = User::find(Auth::user()->id)->mahasiswa->nim;
            $mhs = Mahasiswa::find($mhs_id);
            return view('mahasiswa.portofolio', [
                'id' => $mhs->id,
                'portofolio' => $mhs->portofolio()->paginate(5),
            ]);
        } else if (Auth::user()->hasRole('pa')) {
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = User::find(Auth::user()->id)->mahasiswa->nim;
        $jenis_kegiatan = JenisKegiatan::all();
        return view('mahasiswa.portofolio.add', [
            'id' => $id,
            'jenis_kegiatan' => $jenis_kegiatan,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_kegiatan' => ['required'],
            'nama_kegiatan' => ['required', 'string', 'max:255'],
            'penyelenggara' => ['required', 'string', 'max:255'],
            'tahun' => ['required', 'digits_between:4,4', 'numeric'],
            'bukti' => ['image', 'file', 'max:1024']
        ]);

        Portofolio::create([
            'mahasiswa_id' => User::find(Auth::user()->id)->mahasiswa->nim,
            'jenis_kegiatan_id' => $request->jenis_kegiatan,
            'nama_kegiatan' => $request->nama_kegiatan,
            'penyelenggara' => $request->penyelenggara,
            'tahun' => $request->tahun,
            'bukti' => $request->file('bukti')->store('bukti'),
            'valid_point' => '0',
        ]);

        return redirect("/portofolio/" . Auth::user()->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
