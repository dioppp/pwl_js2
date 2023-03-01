<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('praktikum1.product');
    }

    public function show($name){
        return view('praktikum1.productname', ['name' => $name]);
    }
}
