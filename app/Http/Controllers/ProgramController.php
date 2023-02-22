<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        return "<h2>Programs Page</h2>
        <ol>1. Program 1</ol>
        <ol>2. Program 2</ol>
        <ol>3. Program 3</ol>
        ";
    }
}
