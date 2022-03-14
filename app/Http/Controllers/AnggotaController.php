<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a Mahasiswa.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view ('anggota.index');
        $anggota = DB::table('anggota')->get();
        return view('anggota.index', [
            'anggota' => $anggota,
            'judul' => "Mahasiswa"
        ]);
    }

    /**
     * Display a Petugas.
     *
     * @return \Illuminate\Http\Response
     */
    public function petugas()
    {
        // return view ('admin.petugas');
        $petugas = DB::table('petugas')->get();
        return view('admin.petugas', [
            'petugas' => $petugas,
            'judul' => "Petugas"
        ]);
    }

    /**
     * Display a Buku.
     *
     * @return \Illuminate\Http\Response
     */
    public function buku()
    {
        // return view ('buku.buku');
        $buku = DB::table('buku')->get();
        return view('buku.buku', [
            'buku' => $buku, 'judul' => "Buku"
        ]);
    }

    /**
     * Display a Home.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home', [
            'judul' => "Home"
        ]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
