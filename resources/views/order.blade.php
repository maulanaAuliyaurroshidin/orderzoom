@extends('layout.template')

@section('content')

<div class="container-fluid">
    <div class="row">
        <section>
            <div class="container py-4">

                <form action="/order/save" method="POST">
                     {{ csrf_field() }} 
                         <div class="row justify-content-center">
                             <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                                 <div class="row">
                                     <div class="col text-center">
                                         @foreach($kategori as $p)
                                            <h1>Form Pemesanan</h1>
                                            <h3>Zoom {{$p->jenis}} {{$p->nama_ktgr}}<br>{{$p->kapasitas}} Peserta</h3>
                            
                                            </div>
                                    </div>


                            <div class="row align-items-center">
                                <div class="col mt-4">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4">
                                <div class="col">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Alamat Email" name="email" required>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4">
                                <div class="col">
                                    <label class="form-label">No. Telp</label>
                                    <input type="text" class="form-control" placeholder="Nomor Telepon" name="telp" required>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4">
                                <div class="col">
                                    <label class="form-label">Instansi</label>
                                    <input type="text" class="form-control" placeholder="Nama Instansi" name="instansi" required>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col mt-4">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control" placeholder="Alamat Domisili" name="alamat" required>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col mt-4">
                                    <label class="form-label">Tanggal Peminjaman</label>
                                    <input type="text" class="form-control date" name="tanggal" id="datepicker" required readonly>
                                </div>
                                
                            <div style="display:none" class="row align-items-center">
                                <div class="col mt-4">
                                    <label class="form-label">id</label>
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="id_kategori" value="{{$p->id_kategori}}" required>
                                </div>
                            </div>
                            <p>
                            <div class="col-mt-4">
                                <label for="validationDefaultUsername">Harga</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend2">Rp.</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationDefaultUsername" value="{{$p->harga}}" aria-describedby="inputGroupPrepend2" required readonly>
                                </div>
                            </div>
                                @endforeach
                            </div>
                            
                                <script type="text/javascript">

                                <?php 
                                if($tanggal->isEmpty())
                                {
                                }
                                else
                                {
                                    foreach($tanggal as $tgl)
                                   {
                                    $lists[] = $tgl->tanggal;
                                   }
                                }
                                ?>
                            var array = @json($lists);
                            $('#datepicker').datepicker({
                                multidate: 1, minDate :moment().add('d', 1).toDate(),
                                beforeShowDay: function(date){
                                    var string = jQuery.datepicker.formatDate('mm\/dd\/yy', date);
                                    return [ array.indexOf(string) == -1 ]
                                }
                            });
                                </script>
                            <button class="btn btn-primary btn-block mt-3" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
@endsection