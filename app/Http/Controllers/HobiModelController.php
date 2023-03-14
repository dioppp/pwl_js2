<?php

namespace App\Http\Controllers;

use App\Models\HobiModel;
use Illuminate\Http\Request;

class HobiModelController extends Controller
{
    public function index(){
        $model = HobiModel::all();
        return view('praktikum4.hobi')->with('data', $model);
    }
}
