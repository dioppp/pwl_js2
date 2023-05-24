<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\MahasiswaModel;
use App\Models\Kelas;
use App\Models\Mahasiswa_Matakuliah;
use Illuminate\Http\Request;
use Storage;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = MahasiswaModel::with('kelas')->get();
        $paginate = MahasiswaModel::orderBy('id', 'asc')->paginate(3);
        return view('mahasiswa.mahasiswa', ['mhs' => $mhs, 'paginate'=>$paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('mahasiswa.create_mahasiswa', ['kelas' => $kelas, 'url_form' => route('mahasiswa.store')]);
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
            'nim' => 'required|string|max:10|unique:mahasiswas,nim',
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15',
            'kelas' => 'required|exists:kelas,id',
            'foto' => 'required|file'
        ]);

        if ($request->file('foto')) {
            $image_name = $request->file('foto')->store('images', 'public');
        }

        $mahasiswa = new MahasiswaModel;
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->jk = $request->get('jk');
        $mahasiswa->tempat_lahir = $request->get('tempat_lahir');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        $mahasiswa->alamat = $request->get('alamat');
        $mahasiswa->hp = $request->get('hp');
        $mahasiswa->foto = $image_name;
        $mahasiswa->save();

        $kelas = new Kelas;
        $kelas->id = $request->get('kelas');
        
        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();

        //Jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('/mahasiswa')
                        ->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = MahasiswaModel::with('kelas')->where('id', $id)->first();
        return view('mahasiswa.detail', ['mhs' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = MahasiswaModel::with('kelas')->where('id', $id)->first();
        $kelas = Kelas::all();
        return view('mahasiswa.edit_mahasiswa', ['mahasiswa' => $mahasiswa,
                                                'kelas' => $kelas,
                                                'url_form' => route('mahasiswa.update', $id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mahasiswa = MahasiswaModel::with('kelas')->where('id', $id)->first();

        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswas,nim,'.$id,
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15',
            'kelas' => 'required|exists:kelas,id',
            'foto' => 'file'
        ]);
        
        if ($request->file('foto')) {
            if ($mahasiswa->foto && file_exists(storage_path('app/public/'.$mahasiswa->foto))) {
                Storage::delete('public/'.$mahasiswa->foto);
            }
            $image_name = $request->file('foto')->store('images', 'public');
            $mahasiswa->foto = $image_name;
        }
        
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->jk = $request->get('jk');
        $mahasiswa->tempat_lahir = $request->get('tempat_lahir');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        $mahasiswa->alamat = $request->get('alamat');
        $mahasiswa->hp = $request->get('hp');
        $mahasiswa->save();

        $kelas = new Kelas;
        $kelas->id = $request->get('kelas');

        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();

        //Jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')
                        ->with('success', 'Data mahasiswa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = MahasiswaModel::where('id', '=', $id)->delete();
        Storage::delete('public/'.$data->foto);
        return redirect('/mahasiswa')
                        ->with('success', 'Data mahasiswa berhasil dihapus');
    }

    public function export($id)
    {
        $mhs = MahasiswaModel::where('id', $id)->first();
        $mhsmatkul = Mahasiswa_Matakuliah::with('mahasiswa', 'matkul')->where('mahasiswa_id', $id)->get();
        $pdf = PDF::loadView('mahasiswa.khs_pdf', compact('mhs','mhsmatkul'));
        return $pdf->stream();
    }
}
