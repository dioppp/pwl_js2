<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class KeluargaModelController extends Controller
{
    public function index(){
        $model = KeluargaModel::all();
        return view('praktikum4.keluarga')->with('data', $model);
    }
}
