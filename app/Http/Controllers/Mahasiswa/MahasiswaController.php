<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function portofolio()
    {
        return view('mahasiswa.portofolio');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kegiatan()
    {
        return view('mahasiswa.kegiatan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswaModel
     * @return \Illuminate\Http\Response
     */
    public function show(MahasiswaModel $mahasiswaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MahasiswaModel $mahasiswaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MahasiswaModel  $mahasiswaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MahasiswaModel $mahasiswaModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MahasiswaModel $mahasiswaModel)
    {
        //
    }
}
