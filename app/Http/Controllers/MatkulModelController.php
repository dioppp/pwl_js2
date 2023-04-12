<?php

namespace App\Http\Controllers;

use App\Models\MatkulModel;
use Illuminate\Http\Request;

class MatkulModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $model = MatkulModel::all();
        return view('praktikum4.matkul')->with('model', $model);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('praktikum4.create_matkul')
                    ->with('url_form', url('/matkul'));
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
            'kode_mk' => 'required|string|max:5',
            'nama' => 'required|string|max:100',
            'semester' => 'required|int|max:11',
            'sks' => 'required|int|max:11',
            'jam' => 'required|int|max:11'
        ]);

        $data = MatkulModel::create($request->except(['_token']));
        //Jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('/matkul')
                        ->with('success', 'Data mata kuliah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function show(MatkulModel $matkul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matkul = MatkulModel::find($id);
        return view('praktikum4.create_matkul')
                    ->with('model', $matkul)
                    ->with('url_form', url('/matkul/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_mk' => 'required|string|max:5|unique:matkul_models,kode_mk,'.$id.',kode_mk',
            'nama' => 'required|string|max:100',
            'semester' => 'required|int|max:11',
            'sks' => 'required|int|max:11',
            'jam' => 'required|int|max:11'
        ]);

        $data = MatkulModel::where('kode_mk', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('/matkul')
                        ->with('success', 'Data mata kuliah berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MatkulModel::where('kode_mk', '=', $id)->delete();
        return redirect('/matkul')
                        ->with('success', 'Data mata kuliah berhasil dihapus');
    }
}
