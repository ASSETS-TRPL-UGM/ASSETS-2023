<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function tentang(){
        return view('/tentang');
    }

    public function struktur(){
        return view('/struktur');
    }

    public function notfound(){
        return view('/notfound');
    }

    public function newstruktur(){
        return view('/struktur2');
    }
}
