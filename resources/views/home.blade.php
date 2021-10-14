@extends('layout.template')

@section('content')
<!-- Carousel -->
<!-- <div class="container">
  <div class="row">
    <div class="col"> -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner " style="--bs-bg-opacity: 0; margin-bottom : 20px;">
    <div class="carousel-item active">

      <img src="img/A4.png" class="img-fluid d-block w-100" style="object-position: 20% 40%;width: auto;height: 337px; object-fit: none;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/A5.png" class="img-fluid d-block w-100" style="width:auto; 300px; height: 337px; object-fit: none;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/A6.png" class="img-fluid d-block w-100" style="object-position: 20% 40%;width:auto; height: 337px; object-fit: none;" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>
<!-- </div>
  </div>
</div> -->
<!-- End Carousel -->

<!-- Zoom Pricing -->
<div class="pricing">
  <h1 class="text-center fw-bold mt-4">Sewa Zoom Webinar / Meeting</h1>
  <h5 class="text-center" color="#016FF9">Pilih paket sesuai kebutuhan Anda</h5>
</div>
<div class="line"></div>



<div class="d-flex justify-content-center"><p class="text-center" style="background: #131c24;
    color: white;
    padding: 10px 20px 5px 20px;
    border-radius: 20px 20px 0px 0px;
    margin-bottom: 0px; 
    font-weight: bold;">Paket Zoom Meeting</p></div>
<div class="background">
  <div class="pricing-container">
    <div class="panel pricing-table">

    @foreach($s as $p)
    @if($p->jenis == 'meeting')
      <div class="pricing-plan">
        <div class="pricing-header">
          <h6 class="pricing-tag">{{$p->nama_ktgr}}</h6>
          <h5>Zoom Meeting</h5>
          <h2 class="pricing-type">{{$p->kapasitas}}</h2>
        </div>
        <ul class="pricing-features">
          <li class="pricing-features-item">{{$p->kapasitas}} participants</li>
          <li class="pricing-features-item">Group meetings</li>
          <li class="pricing-features-item">Social media streaming</li>
          <li class="pricing-features-item">Private & Group Chat</li>
        </ul>
        <span class="pricing-price">Rp. {{$p->harga}}</span>
        <p class="pricing-detail">*Harga sudah termasuk PPN 10%</p>
        <a href="/order/{{$p->id_kategori}}" class="pricing-button">Pesan Sekarang</a>
      </div>
      @endif
@endforeach
    </div>
  </div>
</div>



<div class="d-flex justify-content-center"><p class="text-center" style="background: #131c24;
    color: white;
    padding: 10px 20px 5px 20px;
    border-radius: 20px 20px 0px 0px;
    margin-bottom: 0px; margin-top : 50px;
    font-weight: bold;">Paket Zoom Webinar</p></div>
<div class="background">
  <div class="pricing-container">
    <div class="panel pricing-table">

    @foreach($s as $p)
    @if($p->jenis == 'webinar')
      <div class="pricing-plan">
        <div class="pricing-header">
          <h6 class="pricing-tag">{{$p->nama_ktgr}}</h6>
          <h5>Zoom Webinar</h5>
          <h2 class="pricing-type">{{$p->kapasitas}}</h2>
        </div>
        <ul class="pricing-features">
          <li class="pricing-features-item">{{$p->kapasitas}} participants</li>
          <li class="pricing-features-item">Group meetings</li>
          <li class="pricing-features-item">Social media streaming</li>
          <li class="pricing-features-item">Private & Group Chat</li>
        </ul>
        <span class="pricing-price">Rp. {{$p->harga}}</span>
        <p class="pricing-detail">*Harga sudah termasuk PPN 10%</p>
        <a href="/order/{{$p->id_kategori}}" class="pricing-button">Pesan Sekarang</a>
      </div>
      @endif
@endforeach

    </div>
  </div>
</div>

<!-- End Zoom Pricing -->
@endsection