@extends('layout.template')

@section('content')


        <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 py-3">
            <div class="card">
                <div class="card-header bg-success text-light text-center">
                    <h4>Pembayaran</h4> Silahkan transfer pembayaran ke rekening dibawah ini<br>dan upload bukti pembayaran
                </div>
                
                <div class="card-body text-center">
                <form action="/order/cari" method="GET"><label>Masukkan No Pembayaran anda</label>
                <p>
		<input type="text" name="cari" style="border-radius:20px;padding-left:15px; background-color:whitesmoke; border-style: none;margin-left:10px" value="{{ old('cari') }}" >
	
                
                    <div class="row justify-content-center">
                            
                    <a href="/order/uploadbukti/{{$p}}" style="margin-bottom : 5px;" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Upload Bukti Sekarang</a>
                        </form>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection