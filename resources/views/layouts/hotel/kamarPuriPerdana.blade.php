@extends ('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Rekomendasi Hotel') }}</div>
                <div class="card-body">
                    <div class="col-md-12"> 
                    <center>
                    <h2>Puri Perdana</h2>
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
                            @if($kmr->jenis_kamar == 'Deluxe Room')
                            <img src="http://hotelpuriperdana.com/gmb_kamar/Deluxe_Room1670919.jpg" width="100" height="50">
                            @elseif($kmr->jenis_kamar == 'Deluxe Suite Jr')
                            <img src="http://hotelpuriperdana.com/gmb_kamar/Jr._Deluxe_Suite9798994.jpg" width="100" height="50">
                            @elseif($kmr->jenis_kamar == 'Deluxe Suite')
                            <img src="http://hotelpuriperdana.com/gmb_kamar/Deluxe_Suite8716315.jpg" width="100" height="50">
                            @elseif($kmr->jenis_kamar == 'Executive')
                            <img src="http://hotelpuriperdana.com/gmb_kamar/Executive2822835.jpg" width="100" height="50">
                            @elseif($kmr->jenis_kamar == 'Family')
                            <img src="http://hotelpuriperdana.com/gmb_kamar/Family_2046958.jpg" width="100" height="50">
                            @elseif($kmr->jenis_kamar == 'VIP')
                            <img src="http://hotelpuriperdana.com/gmb_kamar/VIP5484923.jpg" width="100" height="50">
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