<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class KeluargaModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $model = KeluargaModel::all();
        return view('praktikum4.keluarga')->with('model', $model);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('praktikum4.create_keluarga')
                    ->with('url_form', url('/keluarga'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validasi
        $request->validate([
            'nik' => 'required|string|max:16',
            'nama' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|string|max:10',
            'hubungan' => 'required|string|max:20'
        ]);

        $data = KeluargaModel::create($request->except(['_token']));
        //Jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('/keluarga')
                        ->with('success', 'Data keluarga berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function show(KeluargaModel $keluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keluarga = KeluargaModel::find($id);
        return view('praktikum4.create_keluarga')
                    ->with('model', $keluarga)
                    ->with('url_form', url('/keluarga/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required|string|max:16|unique:keluarga_models,nik,'.$id.',nik',
            'nama' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|string|max:10',
            'hubungan' => 'required|string|max:20'
        ]);

        $data = KeluargaModel::where('nik', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('/keluarga')
                        ->with('success', 'Data keluarga berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KeluargaModel::where('nik', '=', $id)->delete();
        return redirect('/keluarga')
                        ->with('success', 'Data keluarga berhasil dihapus');
    }
}
