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
Auth::routes();

//tamu 
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('hotel.home');
Route::get('home/descriptionPatriaPalaceHotel/{id_hotel}', [App\Http\Controllers\HomeController::class, 'descriptionPatriaPalaceHotel'])->name('hotel.descriptionPatriaPalaceHotel');
Route::get('home/descriptionGrandMansionHotel/{id_hotel}', [App\Http\Controllers\HomeController::class, 'descriptionGrandMansionHotel'])->name('hotel.descriptionGrandMansionHotel');
Route::get('home/descriptionPuriPerdana/{id_hotel}', [App\Http\Controllers\HomeController::class, 'descriptionPuriPerdana'])->name('hotel.descriptionPuriPerdana');
Route::get('home/kamarGrandMansionHotel', [App\Http\Controllers\HomeController::class, 'kamarGrandMansionHotel'])->name('hotel.kamarGrandMansionHotel');
Route::get('home/kamarPatriaPalaceHotel', [App\Http\Controllers\HomeController::class, 'kamarPatriaPalaceHotel'])->name('hotel.kamarPatriaPalaceHotel');
Route::get('home/kamarPuriPerdana', [App\Http\Controllers\HomeController::class, 'kamarPuriPerdana'])->name('hotel.kamarPuriPerdana');

//admin
