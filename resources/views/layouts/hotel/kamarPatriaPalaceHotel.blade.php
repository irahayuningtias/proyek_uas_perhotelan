@extends ('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Rekomendasi Hotel') }}</div>
                <div class="card-body">
                    <div class="col-md-12"> 
                    <center>
                    <h2> Patria Palace Hotel</h2>
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
                            @if ($kmr->jenis_kamar == 'President Suite')
                            <img src="http://www.hotelpatriablitar.com/wp-content/uploads/2016/02/VIP3-PPC-WIDE-Small-1.jpg" width="100" height="50">
                            @elseif ($kmr->jenis_kamar == 'Suite')
                            <img src="http://www.hotelpatriablitar.com/wp-content/uploads/2016/02/Suite4-PPC-WIDE-Small-1.jpg" width="100" height="50">
                            @elseif ($kmr->jenis_kamar == 'Family')
                            <img src="http://www.hotelpatriablitar.com/wp-content/uploads/2016/02/Family1-PPC-WIDE-Small-1.jpg" width="100" height="50">
                            @elseif ($kmr->jenis_kamar == 'Super Executive')
                            <img src="http://www.hotelpatriablitar.com/wp-content/uploads/2016/02/superExecutivePPCweb.png" width="100" height="50">
                            @elseif ($kmr->jenis_kamar == 'Executive')
                            <img src="http://www.hotelpatriablitar.com/wp-content/uploads/2016/02/Executive1-PPC-WIDE-Small-1.jpg" width="100" height="50">
                        @endif
                        </td>
                        <td>{{$kmr->deskripsi_kamar}}</td>
                        <td>{{$kmr->hrg_per_mlm}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('reservasi') }}">Pesan</a>
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