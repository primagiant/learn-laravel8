<?php

namespace App\Http\Controllers;

use App\Helpers\Main;
use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodi = Prodi::all();
        return view('admin.prodi', [
            'prodi' => $prodi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view('admin.prodi.add', [
            'fakultas' => $fakultas,
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
        Prodi::create([
            'name' => Main::nameFormat($request->name),
            'display_name' => $request->name,
            'description' => $request->description,
            'fakultas_id' => $request->fakultas,
        ]);
        return redirect('/admin-prodi');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fakultas = Fakultas::all();
        $prodi = Prodi::find($id);
        return view('admin.prodi.edit', [
            'prodi' => $prodi,
            'fakultas' => $fakultas,
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
        $prodi = Prodi::find($id);
        $prodi->name = Main::nameFormat($request->name);
        $prodi->display_name = $request->name;
        $prodi->description = $request->description;
        $prodi->fakultas_id = $request->fakultas;
        $prodi->save();
        return redirect('/admin-prodi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Prodi::destroy($id);
        return back();
    }
}
