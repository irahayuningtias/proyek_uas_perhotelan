<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeTamuController extends Controller
{
    public function home(){
        return view('home');
    }
    public function reservasi(){
        return view('reservasi');
    }
}
