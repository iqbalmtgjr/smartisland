<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Smart Island Lemukutan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description"/>

    <!-- Favicon -->
    <link href="asset/img/icon/logo-navbar.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href={{asset("asset/lib/animate/animate.min.css")}} rel="stylesheet" />
    <link href={{asset("asset/lib/owlcarousel/assets/owl.carousel.min.css")}} rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href={{asset("asset/css/bootstrap.min.css")}} rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href={{asset("asset/css/style.css")}} rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5"
    >
      <a href="/" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0 text-primary">
          <img
            class="img-fluid me-3"
            src={{asset("asset/img/icon/logo-navbar-2.png")}}
            alt=""
          />SMART ISLAND
        </h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
          <a href="/" class="nav-item nav-link active">Home</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Produk</a
            >
            <div class="dropdown-menu bg-light border-0 m-0">
              <a href="/ringkasan" class="dropdown-item">Ringkasan</a>
              <a href="#" class="dropdown-item">Hasil Penelitian</a>
              <a href="/pemetaan" class="dropdown-item">Peta Habitat Bentik</a>
            </div>
          </div>
          <a href="/dokumentasi" class="nav-item nav-link">Dokumentasi</a>

        </div>
      </div>
      <a href="" class="btn btn-primary px-3 d-none d-lg-block">Login</a>
    </nav>
    <!-- Navbar End -->

    @yield('konten')
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Support by</h5>
            <h1 class="text-white mb-4">
                <img
                class="img-fluid me-3"
                src="asset/img/icon/logo-navbar-2.png"
                alt=""
                />
            </h1>
            </div>
            <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Alamat</h5>
            <p>Jalan Untung Suropati, No.99. <br>Kota Pontianak</p>
            </div>
            <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Akses Cepat</h5>
            <a class="btn btn-link" href="">Hasil Penelitian</a>
            <a class="btn btn-link" href="/pemetaan">Pementaan Habitat Bentik</a>
            <a class="btn btn-link" href="/ringkasan">Ringkasan</a>
            </div>
        </div>
        </div>
        <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a href="#">Webgis Kelautan</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                <br />Distributed By:
                <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src={{asset("asset/lib/wow/wow.min.js")}}></script>
    <script src={{asset("asset/lib/easing/easing.min.js")}}></script>
    <script src={{asset("asset/lib/waypoints/waypoints.min.js")}}></script>
    <script src={{asset("asset/lib/owlcarousel/owl.carousel.min.js")}}></script>
    <script src={{asset("asset/lib/counterup/counterup.min.js")}}></script>

    <!-- Template Javascript -->
    <script src={{asset("asset/js/main.js")}}></script>
  </body>
</html>
