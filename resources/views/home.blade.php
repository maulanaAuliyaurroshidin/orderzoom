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

      <div class="pricing-plan">
        <div class="pricing-header">
          <h6 class="pricing-tag">Pro</h6>
          <h5>Zoom Meeting</h5>
          <h2 class="pricing-type">100</h2>
        </div>
        <ul class="pricing-features">
          <li class="pricing-features-item">100 participants</li>
          <li class="pricing-features-item">Group meetings</li>
          <li class="pricing-features-item">Social media streaming</li>
          <li class="pricing-features-item">Private & Group Chat</li>
        </ul>
        <span class="pricing-price">*Call for price</span>
        <p class="pricing-detail">*Harga sudah termasuk PPN 10%</p>
        <a href="/order" class="pricing-button">Pesan Sekarang</a>
      </div>

      <div class="pricing-plan">
        <div class="pricing-header">
          <h6 class="pricing-tag">Business</h6>
          <h5>Zoom Meeting</h5>
          <h2 class="pricing-type">300</h2>
        </div>
        <ul class="pricing-features">
          <li class="pricing-features-item">300 participants</li>
          <li class="pricing-features-item">Single sign-on</li>
          <li class="pricing-features-item">Recording transcript</li>
          <li class="pricing-features-item">Private & Group Chat</li>
        </ul>
        <span class="pricing-price">Rp165.000</span>
        <p class="pricing-detail">.</p>
        <a href="https://api.whatsapp.com/send?phone=628155044434&text=Permisi%2C%20saya%20mau%20order%20paket%20zoom%20meeting%20300%20peserta" class="pricing-button">Pesan Sekarang</a>
      </div>


      <div class="pricing-plan">
        <div class="pricing-header">
          <h6 class="pricing-tag">Enterprise</h6>
          <h5>Zoom Meeting</h5>
          <h2 class="pricing-type">500</h2>
        </div>
        <ul class="pricing-features">
          <li class="pricing-features-item">500 participants</li>
          <li class="pricing-features-item">Unlimited cloud storage</li>
          <li class="pricing-features-item">Recording transcripts</li>
          <li class="pricing-features-item">.</li>
        </ul>
        <span class="pricing-price">*Call for price</span>
        <p class="pricing-detail">.</p>
        <a href="https://api.whatsapp.com/send?phone=628155044434&text=Permisi%2C%20saya%20mau%20order%20paket%20zoom%20meeting%20500%20peserta" class="pricing-button">Pesan Sekarang</a>
      </div>
      
       <div class="pricing-plan">
        <div class="pricing-header">
          <h6 class="pricing-tag">Enterprise Plus</h6>
          <h5>Zoom Meeting</h5>
          <h2 class="pricing-type">1000</h2>
        </div>
        <ul class="pricing-features">
          <li class="pricing-features-item">1000 participants</li>
          <li class="pricing-features-item">Unlimited cloud storage</li>
          <li class="pricing-features-item">Recording transcripts</li>
          <li class="pricing-features-item">.</li>
        </ul>
        <span class="pricing-price">*Call for price</span>
        <p class="pricing-detail">.</p>
        <a href="https://api.whatsapp.com/send?phone=628155044434&text=Permisi%2C%20saya%20mau%20order%20paket%20zoom%20meeting%201000%20peserta" class="pricing-button">Pesan Sekarang</a>
      </div>

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

      <div class="pricing-plan">
        <div class="pricing-header">
          <h6 class="pricing-tag">Pro</h6>
          <h5>Zoom Webinar</h5>
          <h2 class="pricing-type">100</h2>
        </div>
        <ul class="pricing-features">
          <li class="pricing-features-item">100 participants</li>
          <li class="pricing-features-item">Group meetings</li>
          <li class="pricing-features-item">Social media streaming</li>
          <li class="pricing-features-item">Private & Group Chat</li>
        </ul>
        <span class="pricing-price">*Call for price</span>
        <p class="pricing-detail">*Harga sudah termasuk PPN 10%</p>
        <a href="https://api.whatsapp.com/send?phone=628155044434&text=Permisi%2C%20saya%20mau%20order%20paket%20zoom%20webinar%20100%20peserta" class="pricing-button">Pesan Sekarang</a>
      </div>

      <div class="pricing-plan">
        <div class="pricing-header">
          <h6 class="pricing-tag">Business</h6>
          <h5>Zoom Webinar </h5>
          <h2 class="pricing-type">500</h2>
        </div>
        <ul class="pricing-features">
          <li class="pricing-features-item">300 participants</li>
          <li class="pricing-features-item">Single sign-on</li>
          <li class="pricing-features-item">Recording transcript</li>
          <li class="pricing-features-item">Private & Group Chat</li>
        </ul>
        <span class="pricing-price">*Call for price</span>
        <p class="pricing-detail">.</p>
        <a href="https://api.whatsapp.com/send?phone=628155044434&text=Permisi%2C%20saya%20mau%20order%20paket%20zoom%20webinar%20500%20peserta" class="pricing-button">Pesan Sekarang</a>
      </div>


      <div class="pricing-plan">
        <div class="pricing-header">
          <h6 class="pricing-tag">Enterprise</h6>
          <h5>Zoom Webinar</h5>
          <h2 class="pricing-type">1000</h2>
        </div>
        <ul class="pricing-features">
          <li class="pricing-features-item">500 participants</li>
          <li class="pricing-features-item">Unlimited cloud storage</li>
          <li class="pricing-features-item">Recording transcripts</li>
          <li class="pricing-features-item">.</li>
        </ul>
        <span class="pricing-price">*Call for price</span>
        <p class="pricing-detail">.</p>
        <a href="https://api.whatsapp.com/send?phone=628155044434&text=Permisi%2C%20saya%20mau%20order%20paket%20zoom%20webinar%201000%20peserta" class="pricing-button">Pesan Sekarang</a>
      </div>

    </div>
  </div>
</div>

<!-- End Zoom Pricing -->
@endsection