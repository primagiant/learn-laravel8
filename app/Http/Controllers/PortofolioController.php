<?php

namespace App\Http\Controllers;

use App\Models\JenisKegiatan;
use App\Models\KategoriKegiatan;
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
        $mhs_id = User::find(Auth::user()->id)->mahasiswa->nim;
        $mhs = Mahasiswa::find($mhs_id);
        return view('mahasiswa.portofolio', [
            'id' => $mhs->id,
            'portofolio' => $mhs->portofolio()->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_kegiatan = KategoriKegiatan::all();
        $jenis_kegiatan = JenisKegiatan::all();
        return view('forms.portofolio.add', [
            'kategori_kegiatan' => $kategori_kegiatan,
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

        return redirect("/portofolio");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portofolio = Portofolio::find($id);
        $kategori_kegiatan = KategoriKegiatan::all();
        $jenis_kegiatan = JenisKegiatan::all();
        return view('forms.portofolio.edit', [
            'id' => $id,
            'portofolio' => $portofolio,
            'kategori_kegiatan' => $kategori_kegiatan,
            'jenis_kegiatan' => $jenis_kegiatan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function validasi($id)
    {
        $portofolio = Portofolio::find($id);
        $kategori_kegiatan = KategoriKegiatan::all();
        return view('forms.portofolio.validasi', [
            'id' => $id,
            'kategori_kegiatan' => $kategori_kegiatan,
            'portofolio' => $portofolio,
        ]);
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
        if (Auth::user()->hasRole('mahasiswa')) {
            if ($request->bukti != null) {
                $request->validate([
                    'jenis_kegiatan' => ['required'],
                    'nama_kegiatan' => ['required', 'string', 'max:255'],
                    'penyelenggara' => ['required', 'string', 'max:255'],
                    'tahun' => ['required', 'digits_between:4,4', 'numeric'],
                    'bukti' => ['image', 'file', 'max:1024']
                ]);
                unlink('storage/' . $request->old_bukti);
                $portofolio = Portofolio::find($id);
                $portofolio->mahasiswa_id = User::find(Auth::user()->id)->mahasiswa->nim;
                $portofolio->jenis_kegiatan_id = $request->jenis_kegiatan;
                $portofolio->nama_kegiatan = $request->nama_kegiatan;
                $portofolio->penyelenggara = $request->penyelenggara;
                $portofolio->tahun = $request->tahun;
                $portofolio->bukti = $request->file("bukti")->store("bukti");
                $portofolio->valid_point = '0';
                $portofolio->save();
            } else {
                $request->validate([
                    'jenis_kegiatan' => ['required'],
                    'nama_kegiatan' => ['required', 'string', 'max:255'],
                    'penyelenggara' => ['required', 'string', 'max:255'],
                    'tahun' => ['required', 'digits_between:4,4', 'numeric'],
                ]);
                $portofolio = Portofolio::find($id);
                $portofolio->mahasiswa_id = User::find(Auth::user()->id)->mahasiswa->nim;
                $portofolio->jenis_kegiatan_id = $request->jenis_kegiatan;
                $portofolio->nama_kegiatan = $request->nama_kegiatan;
                $portofolio->penyelenggara = $request->penyelenggara;
                $portofolio->tahun = $request->tahun;
                $portofolio->bukti = $request->old_bukti;
                $portofolio->valid_point = '0';
                $portofolio->save();
            }
            return redirect("/portofolio");
        } else if (Auth::user()->hasRole('pa')) {
            $request->validate([
                'valid_point' => ['required', 'numeric'],
            ]);
            $portofolio = Portofolio::find($id);
            $portofolio->valid_point = $request->valid_point;
            $portofolio->status = 1;
            $portofolio->save();

            return redirect('/show-mahasiswa-portofolio/' . $portofolio->mahasiswa->nim);
        }
    }

    /**
     * Validasi the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $name = $mahasiswa->nama;
        $mahasiswa = $mahasiswa->portofolio;
        return view('pa.portofolio_mahasiswa', [
            'mahasiswa_name' => $name,
            'portofolio' => $mahasiswa,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        unlink('storage/' . Portofolio::find($id)->bukti);
        Portofolio::destroy($id);
        return back();
    }
}
