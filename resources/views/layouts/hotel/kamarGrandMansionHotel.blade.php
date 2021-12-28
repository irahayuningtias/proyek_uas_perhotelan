@extends ('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Rekomendasi Hotel') }}</div>
                <div class="card-body">
                    <div class="col-md-12"> 
                    <center>
                    <h2>Grand Mansion Hotel</h2>
                    </center>
                    <br>
                    <table class="table table-bordered">
                    <tr>
                        <th>Jenis Kamar</th>
                        <th>Kamar</th>
                        <th>Deskripsi Kamar</th>
                        <th>Harga Per Malam</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($kamar as $kmr)    
                    <tr>
                        <td>{{$kmr->jenis_kamar}} <br></td>
                        <td>
                            @if($kmr->jenis_kamar == 'Superior - Adult Only')
                            <img src="https://pix8.agoda.net/hotelImages/391746/-1/b6f4c163a4ece295beaadae5b0fecdbc.jpg?ca=10&ce=1&s=1024x768" width="100" height="50">
                            @elseif($kmr->jenis_kamar == 'Suite')
                            <img src="https://pix8.agoda.net/hotelImages/391746/-1/f67020e09f4e32d862846e7f8bf4940a.jpg?ca=9&ce=1&s=1024x768" width="100" height="50">
                            @elseif($kmr->jenis_kamar == 'Deluxe')
                            <img src="https://pix8.agoda.net/hotelImages/391/391746/391746_13092721130016678197.jpg?ca=2&ce=1&s=1024x768" width="100" height="50">
                            @elseif($kmr->jenis_kamar == 'President Suite')
                            <img src="https://pix8.agoda.net/hotelImages/391746/448087765/232a7041231f367426ee05f20b2845b7.jpg?ca=23&ce=0&s=1024x768" width="100" height="50">
                            @endif
                        </td>
                            
                        
                        <td>{{$kmr->deskripsi_kamar}}</td>
                        <td>{{$kmr->hrg_per_mlm}}</td>
                        <td>
                            <a class="btn btn-primary">Pesan</a>
                        </td>
                        
                    </tr>
                    @endforeach  
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection