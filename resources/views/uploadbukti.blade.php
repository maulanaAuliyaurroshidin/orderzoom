@extends('layout.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 py-3">
            <div class="card shadow p-3 rounded">
                <div class="card-header bg-success text-light text-center">
                    <h4>Upload Bukti</h4> Silahkan upload bukti transfer dibawah ini<br>
                </div>
                <div class="card-body text-center">
                    <div class="alert alert-danger mt-0"><strong>Peringatan</strong>, Pastikan data dibawah adalah benar pesanan anda.</div>
                    
                    @if($k->status == null && $k->bukti == null)
                    <div class="alert alert-warning" role="alert">
                    ANDA BELUM MELAKUKAN PEMBAYARAN
                    </div>
                    @elseif($k->status == null && $k->bukti !== null)
                    <div class="alert alert-warning" role="alert">
                    TUNGGU
                    </div>
                    @else
                    <div class="alert alert-success" role="alert">
                    Pembayaran telah dikonfirmasi ngademin, silahkan menunggu informasi melalui ngko lah
                    </div>
                    @endif
                    

                    <form>
                    <h5 class="card-title">123123123</h5>
                    <h6 class="card-subtitle mb-2 text-muted">A/N PT.Radnet Digital Indonesia</h6>
                    <p class="card-text">Mandiri Syariah</p>
                    </form>
                    <p class="lead">Nama <strong>{{$k->nama}} </strong></p>
                    <p class="lead"><strong>Paket Zoom {{$k->jenis}} {{$k->kapasitas}} </strong></p>
                    <p class="lead">Harga <strong>Rp.{{$k->harga}} </strong></p>
                    <p>
                    <p class="lead">Kode Pembayaran <strong>{{$p}}</strong></p>
                    <p>
                    <div class="row justify-content-center">
                        <form action="/order/upload/{{$p}}" method="POST">
                        {{ csrf_field() }}

                        @if($k->bukti == null)
                            <div class="form-group">
                                <label for="images">Upload Bukti</label>
                            <input type="hidden" name="id" value="{{$p}}">
                            <input type="file" name="bukti" id='images' class="form-control w-50 m-auto">
                            </div>
                            <input action= "/order/upload/{{$p}}"type="submit" class="btn btn-success" style="margin-top:5px;" value="Upload" />
                        @else
                        @endif

                        <!-- <div class="form-group">
                            <label for="images">Upload Bukti</label>
                            <input type="file" name="images[]" id='images' class="form-control w-50 m-auto">

                        </div> -->

                        <!-- <form method="post" id="upload_form">
                            <input class="form-control w-50 m-auto" type="file" name="buktipembayaran" id="buktipembayaran" accept="image/*" />
                        </form> -->
                    </div>
                    </p>
                    <!-- <p><button type="submit" name="btn_simpan" class="btn btn-success">Kirim</button></p> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection