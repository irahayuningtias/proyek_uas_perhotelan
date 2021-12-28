@extends ('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Rekomendasi Hotel') }}</div>
                <div class="card-body">
                    <div class="col-md-12"> 
                    <center>
                    <h2>{{$hotel->nama_hotel}}</h2>
                    <br>
                    <img src="https://pix10.agoda.net/hotelImages/267624/-1/2945abd0edd682a4e915e7c454181ed3.jpg?ca=7&ce=1&s=500x500" width="350" height="225"> 
                    <br><br>
                    <p>Patria Palace Hotel merupakan salah satu hotel bintang 3 yang ada di Kota Blitar. <br>
                        Pengunjung akan disuguhi tempat yang penginapan yang nyaman serta pelayanan yang terbaik. <br>
                        Fasilitasnya sendiri meliputi Kolam renang, tempat parkir dan lain-lain.</p>
                    <div class="float-right my-2">
                    <a class="btn btn-success" href="{{ route('hotel.kamarPatriaPalaceHotel') }}">Lihat Kamar</a>
                    </div> 
                    </center>
                    <br>
                    <a>Alamat    : {{$hotel->alamat_hotel}}</a><br>
                    <a>No Telpon : {{$hotel->tlpn_hotel}}</a><br>
                    Lokasi: <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15800.037742662444!2d112.1642736!3d-8.1005189!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a4516367477887b!2sPatria%20Palace%20Hotel!5e0!3m2!1sid!2sid!4v1640148044586!5m2!1sid!2sid" width="350" height="255" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection