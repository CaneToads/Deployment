<?php

namespace App\Http\Controllers;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
 
    public function index()
    {
        $matakuliahs = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    public function create()
    {
        return view('matakuliah.createmkl');
    }

    public function store(Request $request)
    {
        $mkl = new Matakuliah();
        $mkl->matakuliah=$request->input('matakuliah');
       
        $mkl->save();

        return redirect('/matakuliah');
    }

    public function edit($id)
    {
        $mkl = Matakuliah::find($id);
        return view('matakuliah.editmkl', compact('mkl'));
    }

    public function update(Request $request, $id)
    {
        $mkl = Matakuliah::find($id);
        $mkl->matakuliah=$request->input('matakuliah');
        $mkl->save();

        return redirect('/matakuliah');
    }

    public function destroy($id)
    {
        $mkl =matakuliah::find($id);
        $mkl->delete();

        return redirect('/matakuliah');
    }
}