<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landing extends Controller
{
    public function index(){
        return view('landing-page.index');
    }
}
