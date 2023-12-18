<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class falController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function getFal()
    {
        $x = rand(1, 30);
        return view('falha.'. $x);
    }

}
