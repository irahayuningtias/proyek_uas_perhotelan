<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//tamu 
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('hotel.home');
Route::get('home/descriptionPatriaPalaceHotel', [App\Http\Controllers\HomeController::class, 'descriptionPatriaPalaceHotel'])->name('hotel.descriptionPatriaPalaceHotel');
Route::get('home/descriptionGrandMansionHotel', [App\Http\Controllers\HomeController::class, 'descriptionGrandMansionHotel'])->name('hotel.descriptionGrandMansionHotel');
Route::get('home/descriptionPuriPerdana', [App\Http\Controllers\HomeController::class, 'descriptionPuriPerdana'])->name('hotel.descriptionPuriPerdana');
//admin
