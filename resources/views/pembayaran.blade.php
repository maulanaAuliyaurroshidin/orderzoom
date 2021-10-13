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
                    <div class="alert alert-danger mt-0"><strong>Peringatan</strong>, Catat kode pembayaran anda jika ingin melakukan pembayaran nanti</div>
                    <h5 class="card-title">123123123</h5>
                    <h6 class="card-subtitle mb-2 text-muted">A/N PT.Radnet Digital Indonesia</h6>
                    <p class="card-text">Mandiri Syariah</p>
                    <p class="lead">Nama <strong>{{$k->nama}}</strong></p>
                    <p class="lead">Total Pembayaran Rp.<strong>123.123</strong></p>
                    <p class="lead">Kode Pembayaran <strong>{{$k->id}}</strong></p>
                    <p>Jika sudah melakukan transfer, segera<br> mengunggah bukti transfer</p>
                    <p>
                    <div class="row justify-content-center">
                            
                    <a href="/order/uploadbukti/{{$p}}" style="margin-bottom : 5px;" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Upload Bukti Sekarang</a>
                    <a href="/upload/nanti" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Upload Nanti</a>
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