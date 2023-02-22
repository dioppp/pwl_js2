<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return "<h2>Products Page</h2>
        <ol>1. Produk 1</ol>
        <ol>2. Produk 2</ol>
        <ol>3. Produk 3</ol>
        <ol>4. Produk 4</ol>
        ";
    }
}
