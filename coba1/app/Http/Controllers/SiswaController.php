<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function data(){
        $siswa = Siswa::all();
        return view('siswa.data',compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request$request)
    {
        //dd($request->except('_token',"submit"));
        Siswa::create($request->except('_token',"submit"));
        return redirect('/siswa');
    }

public function edit($id)
{
    $siswa = Siswa::find($id);
    return view('siswa.edit',compact(['siswa']));
}

public function update($id, Request $request)
{
    $siswa = Siswa::find($id);
    $siswa->update($request->except('_token',"submit"));
    return redirect('/siswa');
}
public function destroy($id)
{
    $siswa = Siswa::find($id);
    $siswa->delete();
    return redirect('/siswa');
}
public function materivideo()
    {
        return view('siswa.materivideo');
    }
}