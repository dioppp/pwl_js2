<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa_Matakuliah;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaMatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Mahasiswa_Matakuliah  $mahasiswa_Matakuliah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mhs = MahasiswaModel::where('id', $id)->first();
        $mhsmatkul = Mahasiswa_Matakuliah::with('mahasiswa', 'matakuliah')->where('mahasiswa_id', $id)->get();
        return view('mahasiswa.nilai')->with('mhs', $mhs)->with('mhsmatkul', $mhsmatkul);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa_Matakuliah  $mahasiswa_Matakuliah
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
     * @param  \App\Models\Mahasiswa_Matakuliah  $mahasiswa_Matakuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa_Matakuliah  $mahasiswa_Matakuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
