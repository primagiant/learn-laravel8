<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use App\Models\Mahasiswa;
use App\Models\PembimbingAkademik;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $mhs = Mahasiswa::paginate(7);
            return view('admin.mahasiswa', [
                'mahasiswa' => $mhs,
            ]);
        } else if (Auth::user()->hasRole('pa')) {
            if (request('keyword') != null) {
                $mhs =  Mahasiswa::where('pa_id', '=', Auth::user()->pa->id)
                    ->where('nim', 'like', '%' . request('keyword') . '%')
                    ->orWhere('nama', 'like', '%' . request('keyword') . '%')
                    ->get();
            } else {
                $mhs = PembimbingAkademik::find(Auth::user()->pa->id)->mahasiswa;
            }
            return view('pa.mahasiswa', [
                'mahasiswa' => $mhs,
                'keyword' => request('keyword'),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $angkatan = Angkatan::all();
        $prodi = Prodi::all();
        if (Auth::user()->hasRole('admin')) {
            $pa = PembimbingAkademik::all();
            return view('forms.mahasiswa.add', [
                'angkatan' => $angkatan,
                'prodi' => $prodi,
                'pa' => $pa,
            ]);
        } else if (Auth::user()->hasRole('pa')) {
            return view('forms.mahasiswa.add', [
                'angkatan' => $angkatan,
                'prodi' => $prodi,
            ]);
        }
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
            'nim' => ['required', 'numeric', 'unique:App\Models\Mahasiswa,nim'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if (Auth::user()->hasRole('admin')) {
            $pa = $request->pa;
        } else if (Auth::user()->hasRole('pa')) {
            $pa = Auth::user()->pa->id;
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->attachRole('mahasiswa');
        event(new Registered($user));


        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->name,
            'pa_id' => $pa,
            'angkatan_id' => $request->angkatan,
            'prodi_id' => $request->prodi,
            'user_id' => $user['id'],
        ]);

        if (Auth::user()->hasRole('admin')) {
            return redirect('/admin-mahasiswa');
        } else if (Auth::user()->hasRole('pa')) {
            return redirect('/pa-mahasiswa');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $mhs = Mahasiswa::find(Auth::user()->mahasiswa->nim);
        // Mecari Point
        $point = 0;
        foreach ($mhs->portofolio as $p) {
            $point += $p->valid_point;
        }
        return view('mahasiswa.dashboard', [
            'mahasiswa' => $mhs,
            'angkatan' => $mhs->angkatan->tahun,
            'prodi' => $mhs->prodi,
            'pa' => $mhs->pa,
            'point' => $point,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('forms.mahasiswa.edit');
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
        User::destroy(Mahasiswa::find($id)->user_id);
        Mahasiswa::destroy($id);
        return back();
    }
}
