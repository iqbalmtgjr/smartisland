@extends('master.layout')
@section('konten')
<!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="asset/img/tes1.png" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-8">
                    <h3 class="display-7 text-white">Selamat Datang di Webgis</h3>
                    <h2 class="display-6 text-dark mb-4 animated slideInDown text-white">Smart Island Pulau Lemukutan</h2>
                    <a href="/pemetaan" class="btn btn-primary py-3 px-5"
                      >Pemetaan</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="carousel-item">
            <img class="w-100" src="img/carousel-2.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class="display-3 text-dark mb-4 animated slideInDown">
                      The Best Insurance Begins Here
                    </h1>
                    <p class="fs-5 text-body mb-5">
                      Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                      duo justo magna dolore erat amet
                    </p>
                    <a href="" class="btn btn-primary py-3 px-5"
                      >More Details</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> -->
      </div>
    </div>
    <!-- Carousel End -->
    <!-- <div class="container-xxl py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-9">
            <h4 class="display-7 mb-5">Webgis Perairan Kabupaten Bengkayang</h4>
              <div class="card">
                <div class="card-body">
                  Ini isi peta
                </div>
              </div>
          </div>
          <div class="col-3">
            <h4 class="display-7 mb-5">Keterangan</h4>
            <div class="card">
              <div class="card-body">
                <img src="/" alt="">
                Keterangan
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="asset/img/gbr2.png" class="card-img-top" alt="...">
            <!-- <div class="row">
              <div class="col-6 col-md-3">
                <img src="img/icon/logo-unoso.png" class="card-img-top" alt="...">
              </div>
              <div class="col-6 col-md-3">
                <img src="img/icon/logo-kemendikbud.png" class="card-img-top" alt="...">
              </div>
              <div class="col-6 col-md-3">
                <img src="img/icon/logo-bengkayang.png" class="card-img-top" alt="...">
              </div>
            </div> -->
          </div>
          <div class="col-sm-6">
            <h3 class="display-7 mb-5">Tentang Aplikasi</h3>
            <p>Smart Island Pulau Lemukutan menjadi
              katalis dalam mewujudkan ekosistem Pulau
              Cerdas yang ada di Provinsi Kalimantan
              Barat dengan menyajikan peta habitat
              bentik lewat layanan webgis dan aktualisasi
              pengembangan teknologi wilayah pesisir
              dan pulau-pulau kecil berbasis smart island
              lewat konsep smart destination dengan
              pengintegrasian informasi habitat bentik
              lewat layanan webgis.</p>
          </div>
      </div>
    </div>
    <!-- About End -->
<hr>
    <!-- Facts Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <h3 class="display-7 mb-5"> Hubungi Kami</h3>
            
            <p class="mb-4">
              Telepon : +(62)89512722087 <br>
              Email   : info@oso.ac.id <br> <hr>
              
              Alamat <br>
              Jalan Untung Suropati No.99 Kota Pontianak, Kalimantan Barat.
            </p>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px; visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
            <div class="position-relative rounded overflow-hidden h-100">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.816997326095!2d109.34493341475326!3d-0.04665989996595296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59f3426923b9%3A0x53b51aa0dca8b564!2sUniversitas%20OSO!5e0!3m2!1sid!2sid!4v1689414247901!5m2!1sid!2sid" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

@endsection