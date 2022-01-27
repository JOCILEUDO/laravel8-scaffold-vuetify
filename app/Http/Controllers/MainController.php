<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function indexView()
    {
        return view('index');
    }

    public function defaultView()
    {
        return view('default');
    }
}
