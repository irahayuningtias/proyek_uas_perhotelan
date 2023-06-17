@extends ('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Reservasi') }}</div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input. <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="col-md-12">
                <form action="{{ route('hotel.reservasi')}}" method="POST" id="myForm">
                @csrf
                    <div class="form-group">
                        <label for="jml_tamu">Jumlah Tamu</label>
                        <input type="text" name="jml_tamu" class="form-control" id="jml_tamu" aria-describedby="jml_tamu">
                    </div>
                    <div class="form-group">
                        <label for="check_in">Check In</label>
                        <input type="datetime" name="check_in" class="form-control" id="check_in" aria-describedby="check_in">
                    </div>
                    <div class="form-group">
                        <label for="check_out">Jumlah Tamu</label>
                        <input type="datetime" name="check_out" class="form-control" id="check_out" aria-describedby="check_out">
                    </div>
                    <div class="form-group">
                        <label for="lama_inap">Lama Menginap</label>
                        <input type="text" name="lama_inap" class="form-control" id="lama_inap" aria-describedby="lama_inap">
                    </div>
                    <div class="form-group">
                        <label for="nama_pemesan">Nama Pemesan</label>
                        <input type="text" name="nama_pemesan" class="form-control" id="nama_pemesan" aria-describedby="nama_pemesan">
                    </div>
                    <div class="form-group">
                        <label for="no_identitas">No. Identitas (KTP)</label>
                        <input type="text" name="no_identitas" class="form-control" id="no_identitas" aria-describedby="no_identitas">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No. Handphone</label>
                        <input type="text" name="no_hp" class="form-control" id="no_hp" aria-describedby="no_hp">
                    </div>
                    <div class="form-group"> 
                        <label for="total_byr">Total Bayar</label>
                        <a>{{$request->total_byr}}</a>
                    </div>
                    <button type="submit" class="btn btn-primary" href="">Bayar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 