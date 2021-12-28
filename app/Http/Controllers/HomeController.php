<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Deskripsi;
use App\Models\Kamar;
use App\Models\Reservasi;
use App\Models\DetailReservasi;

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
        $hotel = Deskripsi::where('id_hotel', '1')->first();
        return view('layouts.hotel.descriptionPatriaPalaceHotel', ['hotel' => $hotel]);
    }

    public function descriptionGrandMansionHotel()
    {
        $hotel = Deskripsi::where('id_hotel', '2')->first();
        return view('layouts.hotel.descriptionGrandMansionHotel',  ['hotel' => $hotel]);
    }
    
    public function descriptionPuriPerdana()
    {
        $hotel = Deskripsi::where('id_hotel', '3')->first();
        return view('layouts.hotel.descriptionPuriPerdana',  ['hotel' => $hotel]);
    }

    public function kamarPatriaPalaceHotel(){
        $kamar = DB::table('kamar')->where('id_hotel', 1)->get(['jenis_kamar', 'deskripsi_kamar', 'hrg_per_mlm']);
        return view('layouts.hotel.kamarPatriaPalaceHotel',  ['kamar' => $kamar]);
    }

    public function kamarGrandMansionHotel(){
        $kamar = DB::table('kamar')->where('id_hotel', 2)->get(['jenis_kamar', 'deskripsi_kamar', 'hrg_per_mlm']);
        return view('layouts.hotel.kamarGrandMansionHotel',  ['kamar' => $kamar]);
    }

    public function kamarPuriPerdana(){
        $kamar = DB::table('kamar')->where('id_hotel', 3)->get(['jenis_kamar', 'deskripsi_kamar', 'hrg_per_mlm']);
        return view('layouts.hotel.kamarPuriPerdana', ['kamar' => $kamar]);
    }
}