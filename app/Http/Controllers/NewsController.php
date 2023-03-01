<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('praktikum1.news');
    }

    public function news($id){
        return view('praktikum1.newsname', ['id' => $id]);
    }
}
