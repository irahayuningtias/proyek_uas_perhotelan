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
                    <img src="https://origin.pegipegi.com/jalan/images/pict1L/Y0/Y905650/Y905650016.jpg" width="350" height="225"> 
                    <br><br>
                        <p text-align="center">Grand Mansion Hotel merupakan salah satu hotel bintang 3 yang ada di Kota Blitar. <br>
                        Kami memiliki fasilitas yang dapat membuat Anda nyaman di hotel kami <br>
                        dan kami akan melayani Anda dengan sepenuh hati. <br>
                        Anda  juga dapat memilih kamar yang Anda inginkan
                        </p>
                    <div class="float-right my-2">
                        <a class="btn btn-success" href="{{ route('hotel.kamarGrandMansionHotel') }}">Lihat Kamar</a>
                    </div>        
                    </center>
                    <br>
                    <a>Alamat    : {{$hotel->alamat_hotel}}</a><br>
                    <a>No Telpon : {{$hotel->tlpn_hotel}}</a><br>
                    Lokasi: <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.9846066331847!2d112.15884701478019!3d-8.103048894166431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78ec0dd4dc2ffb%3A0x9258d318c8e39cb2!2sGrand%20Mansion%20Hotel%20Blitar!5e0!3m2!1sid!2sid!4v1640147582118!5m2!1sid!2sid" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <br>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection