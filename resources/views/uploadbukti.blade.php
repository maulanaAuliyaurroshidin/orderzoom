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
                    <div class="alert alert-danger mt-0"><strong>Peringatan</strong>, Pastikan data dibawah adalah benar pesanan anda.</div>
                    <h5 class="card-title">123123123</h5>
                    <h6 class="card-subtitle mb-2 text-muted">A/N PT.Radnet Digital Indonesia</h6>
                    <p class="card-text">Mandiri Syariah</p>
                    <p class="lead">Nama <strong>{{$k->nama}} </strong></p>
                    <p class="lead">Total Pembayaran Rp.<strong>123.123</strong></p>
                    <p class="lead">Kode Pembayaran <strong>{{$p}}</strong></p>
                    <p>Jika sudah melakukan transfer, segera<br> mengunggah bukti transfer</p>
                    <p>
                    <div class="row justify-content-center">
                        <form action="/order/upload/{{$p}}" method="POST">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="images">Upload Bukti</label>
                            <input type="hidden" name="id" value="{{$p}}">
                            <input type="file" name="bukti" id='images' class="form-control w-50 m-auto">
                            </div>
                            <input action= "/order/upload/{{$p}}"type="submit" class="btn btn-success" style="margin-top:5px;" value="Upload" />
                        </form>

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