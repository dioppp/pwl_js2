<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return "<h2>News Page</h2>";
    }

    public function news($id){
        return "<h2>News $id</h2>";
    }
}
