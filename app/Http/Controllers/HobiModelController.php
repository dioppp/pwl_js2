<?php

namespace App\Http\Controllers;

use App\Models\HobiModel;
use Illuminate\Http\Request;

class HobiModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $model = HobiModel::all();
        return view('praktikum4.hobi')->with('model', $model);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('praktikum4.create_hobi')
                    ->with('url_form', url('/hobi'));
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
            'nama_hobi' => 'required|string|max:50',
        ]);

        $data = HobiModel::create($request->except(['_token']));
        //Jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('/hobi')
                        ->with('success', 'Data hobi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function show(HobiModel $hobi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hobi = HobiModel::find($id);
        return view('praktikum4.create_hobi')
                    ->with('model', $hobi)
                    ->with('url_form', url('/hobi/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_hobi' => 'required|string|max:50|unique:hobi_models,nama_hobi,'.$id,
        ]);

        $data = HobiModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('/hobi')
                        ->with('success', 'Data hobi berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HobiModel::where('id', '=', $id)->delete();
        return redirect('/hobi')
                        ->with('success', 'Data hobi berhasil dihapus');
    }
}
