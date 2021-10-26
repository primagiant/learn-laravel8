<?php

namespace App\Http\Controllers;

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
        return view('forms.fakultas.add');
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
            'displayName' => ['required', 'max:255'],
            'deskripsi' => ['required', 'max:255'],
        ]);

        Fakultas::create([
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
        return view('forms.fakultas.edit', [
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
        $request->validate([
            'displayName' => ['required', 'max:255'],
            'deskripsi' => ['required', 'max:255'],
        ]);

        $fakultas = Fakultas::find($id);
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
