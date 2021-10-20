<?php

namespace App\Http\Controllers;

use App\Helpers\Main;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fakultas = Fakultas::all();
        return view('admin.fakultas', [
            'fakultas' => $fakultas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fakultas.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fakultas::create([
            'name' => Main::nameFormat($request->displayName),
            'display_name' => $request->displayName,
            'description' => $request->deskripsi,
        ]);
        return redirect('/admin-fakultas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fakultas = Fakultas::find($id);
        return view('admin.fakultas.edit', [
            'id' => $fakultas['id'],
            'display_name' => $fakultas['display_name'],
            'deskripsi' => $fakultas['description'],
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
        $fakultas = Fakultas::find($id);
        $fakultas->name = Main::nameFormat($request->display_name);
        $fakultas->display_name = $request->display_name;
        $fakultas->description = $request->description;
        $fakultas->save();
        return redirect('/admin-fakultas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fakultas::destroy($id);
        return back();
    }
}
