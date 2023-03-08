<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleModelController extends Controller
{
    public function index(){
        $model = ArticleModel::all();
        return view('praktikum4.article')->with('data', $model);
    }
}
