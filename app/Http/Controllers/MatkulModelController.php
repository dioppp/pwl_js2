<?php

namespace App\Http\Controllers;

use App\Models\MatkulModel;
use Illuminate\Http\Request;

class MatkulModelController extends Controller
{
    public function index(){
        $model = MatkulModel::all();
        return view('praktikum4.matkul')->with('data', $model);
    }
}
