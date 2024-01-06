<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.createmhs');
    }

    public function store(Request $request)
    {
        $mhs = new Mahasiswa();
        $mhs->nama=$request->input('nama');
        $mhs->nim=$request->input('nim');
        $mhs->save();

        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        $mhs = Mahasiswa::find($id);
        return view('mahasiswa.editmhs', compact('mhs'));
    }

    public function update(Request $request, $id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->nama = $request->input('nama');
        $mhs->nim = $request->input('nim');
        $mhs->save();

        return redirect('/mahasiswa');
    }

    public function destroy($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();

        return redirect('/mahasiswa');
    }
}