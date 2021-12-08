<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('layouts.hotel.home', ['user' => '$user']);
    }
    public function descriptionPatriaPalaceHotel()
    {
        return view('layouts.hotel.descriptionPatriaPalaceHotel');
    }
    public function descriptionGrandMansionHotel()
    {
        return view('layouts.hotel.descriptionGrandMansionHotel');
    }
    public function descriptionPuriPerdana()
    {
        return view('layouts.hotel.descriptionPuriPerdana');
    }
}
