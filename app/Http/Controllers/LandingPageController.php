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

    public function newstruktur(){
        return view('/struktur2');
    }

    public function galeri(){
        return view('/galeri');
    }
}
