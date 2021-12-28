@extends ('layouts.app');

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Rekomendasi Hotel') }}</div>
                <div class="card-body">
                <div class="col-md-12"> 
                <center>
                    <h2>{{$hotel->nama_hotel}}</h2>
                    <br><br>
                    <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-dskt/tix-hotel/images-web/2020/10/31/d3165809-5fec-49fc-9d53-51ce029ce525-1604122896149-781807e0b634c6c3dcb45e19e76e02dc.jpg"  width="350" height="225"> 
                    <br><br>
                    <p>Hotel kami memiliki fasilitas yang terbaik dengan harga yang terjangkau. <br>
                    Segera kunjungi hotel kami, dan nikmati pelayanan yang kami berikan <br>
                    </p>
                    <div class="float-right my-2">
                    <a class="btn btn-success" href="{{ route('hotel.kamarPuriPerdana') }}">Lihat Kamar</a>
                    </div> 
                </center>
                    <br>
                        <a>Alamat    : {{$hotel->alamat_hotel}}</a><br>
                        <a>No Telpon : {{$hotel->tlpn_hotel}}</a><br>
                        <a>Lokasi</a><br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.0677841631923!2d112.16289301478012!3d-8.094570294172389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78ec149a0263cb%3A0x8e1df9775645dc00!2sPuri%20Perdana%20Hotel%20%26%20Convention%20Hall!5e0!3m2!1sid!2sid!4v1640151081718!5m2!1sid!2sid" width="350" height="255" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection