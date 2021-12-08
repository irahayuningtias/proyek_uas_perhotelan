@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Rekomendasi Hotel') }}</div>
                <div class="card-body">
                    <div class="flex-container">
                        <center>
                        <img src="https://pix10.agoda.net/hotelImages/267624/-1/2945abd0edd682a4e915e7c454181ed3.jpg?ca=7&ce=1&s=500x500" width="350" height="225">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="home/descriptionPatriaPalaceHotel" class="underline text-gray-900 dark:text-white">Patria Palace Hotel<br>⭐ ⭐ ⭐ </a></div>
                        </center>
                        <br><br>
                        <center>
                        <img src="https://origin.pegipegi.com/jalan/images/pict1L/Y0/Y905650/Y905650016.jpg"  width="350" height="225">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="/hotel/description" class="underline text-gray-900 dark:text-white">Grand Mansion Hotel <br> ⭐ ⭐ ⭐</a></div>
                        </center>
                        <br><br>
                        <center>
                        <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-dskt/tix-hotel/images-web/2020/10/31/d3165809-5fec-49fc-9d53-51ce029ce525-1604122896149-781807e0b634c6c3dcb45e19e76e02dc.jpg"  width="350" height="225">
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Puri Perdana <br> ⭐ ⭐ </a></div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
