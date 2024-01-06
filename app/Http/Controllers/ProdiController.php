<?php

namespace App\Http\Controllers;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{

    public function index()
    {
        $prodis = Prodi::all();
        return view('prodi.index', compact('prodis'));
    }

    public function create()
    {
        return view('prodi.createprd');
    }

    public function store(Request $request)
    {
        $prd = new Prodi();
        $prd->prodi=$request->input('prodi');
        
        $prd->save();

        return redirect('/prodi');
    }

    public function edit($id)
    {
        $prd = Prodi::find($id);
        return view('prodi.editprd', compact('prd'));
    }

    public function update(Request $request, $id)
    {
        $prd = Prodi::find($id);
        $prd->prodi=$request->input('prodi');
        
        $prd->save();

        return redirect('/prodi');
    }

    public function destroy($id)
    {
        $prd = Prodi::find($id);
        $prd->delete();

        return redirect('/prodi');
    }
}