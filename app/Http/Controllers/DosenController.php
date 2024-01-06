<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{

    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.createdsn');
    }

    public function store(Request $request)
    {
        $dsn = new Dosen();
        $dsn->nama=$request->input('nama');
        $dsn->nip=$request->input('nip');
        $dsn->save();

        return redirect('/dosen');
    }

    public function edit($id)
    {
        $dsn = Dosen::find($id);
        return view('dosen.editdsn', compact('dsn'));
    }

    public function update(Request $request, $id)
    {
        $dsn = Dosen::find($id);
        $dsn->nama=$request->input('nama');
        $dsn->nip=$request->input('nip');
        $dsn->save();

        return redirect('/dosen');
    }

    public function destroy($id)
    {
        $dsn = Dosen::find($id);
        $dsn->delete();

        return redirect('/dosen');
    }
}