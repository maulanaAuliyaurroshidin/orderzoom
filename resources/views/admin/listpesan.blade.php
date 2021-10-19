@extends('layout.templateadmin')
@section('contentadmin')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0"></h3>
    </div>

    <!-- Tabel -->

    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Data Pesanan</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Pesanan</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telp</th>
                            <th>Tanggal</th>
                            <th>Bukti</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
							@php
                                        $i = 0;
                                    @endphp
                              @foreach($pesan as $psn)
                                  @php                    
                                    $i++;
                                   @endphp
                            <tr>
							        <td >{{$i}}</td>
                                    <td>{{ $psn->id }}</td>
                                    <td>{{ $psn->nama }}</td>
                                    <td><a href="mailto:{{ $psn->email }}">{{ $psn->email }}</a></td>
                                    <td><a href="https://wa.me/+62{{ $psn->telp}}" class="link-primary">wa.me/+62{{ $psn->telp}}</a></td>
                                    <td>{{ $psn->tanggal}}</td>
                                    <td>   @if($psn->bukti !== null)
                                       
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cek{{ $psn->id }}"><i class="fas fa-check-circle"></i></button>
                                    @else
                                     
                                    <button type="button" class="btn btn-danger"><i class="fas fa-times-circle"></i></button>
                                    @endif
                                    </td>
                                    <td>@if($psn->status == 1)
                                    <button type="button" class="btn btn-success" disabled>Success</button>
                                    @else

                                    <button type="button" class="btn btn-danger"  disabled>Danger</button>
                                    @endif
                                    </td>
                                <td>
                                    <button class="btn btn-primary btn-sm d-none d-sm-inline-block" data-toggle="modal" data-target="#modalKonfirm">Konfirmasi</button>
                                    <button class="btn btn-success btn-sm d-none d-sm-inline-block" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $psn->id }}" >detail</button>
         
                                </td>
                            </tr>
                            <!-- modal -->
                            <div class="modal fade" id="exampleModal{{ $psn->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h3 class="modal-title" id="exampleModalLabel">Detail Data Pesanan</h3>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body" style="height:600px">
                                                  <div style="text-align:left;width:50%;float:left;font-size:25px">
                                                    <p class="lead" > No. Pesanan <strong>{{$psn->id}}</strong>
                                                    <p class="lead" > Nama <strong>{{$psn->nama}}</strong>
                                                    <p class="lead" > Email <strong>{{$psn->email}}</strong>
                                                    <p class="lead" > Instansi <strong>{{$psn->instansi}}</strong>
                                                    <p class="lead" > Telp <strong>{{$psn->telp}}</strong>
                                                    <p class="lead" > Tanggal <strong>{{$psn->tanggal}}</strong>
                                                    <p class="lead" > Harga <strong>{{$psn->harga}}</strong>
                                                  </div>  
                                                  <div style="text-align:left;width:50%;float:right;font-size:25px">
                                                
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                            <div class="modal fade" id="cek{{ $psn->id }}" tabindex="-1" role="dialog" aria-labelledby="cekLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h3 class="modal-title" id="cekLabel">Bukti Pembayaran</h3>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body" style="height:600px">
                                                  <div style="text-align:left;width:50%;float:left;font-size:25px">
                                                    <p class="lead" > Bukti<br> <strong>{{$psn->bukti}}</strong>
                                                  </div>  
                                                  <div style="text-align:left;width:50%;float:right;font-size:25px">
                                                
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                            <!-- Modal Konfirmasi -->
                            <div class="modal fade mt-5 pt-5" id="modalKonfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Transaksi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="" method="post">
                                            <div class="modal-body">
                                                <p>Apakah benar anda ingin menghapus data ini?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" name="submit" class="btn btn-primary">Konfirmasi</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Modal -->

                   
                            <!-- Akhir Modal -->
                        @endforeach
                    </tbody>
                </table>{{ $pesan->links() }}
            </div>
        </div>
    </div>

    <!-- batas tabel -->



@endsection
