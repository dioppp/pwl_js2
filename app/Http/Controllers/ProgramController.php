<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        return view('praktikum1.program');
    }

    public function show($name){
        return view('praktikum1.programname', ['name' => $name]);
    }
}
