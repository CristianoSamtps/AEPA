<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset ('img/favicon.svg')}}" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300&family=Raleway:wght@500&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset ('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

  <link href="{{ asset ('/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset ('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset ('/css/style.css') }}" rel="stylesheet">
  @yield('styles')

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <svg width="965" height="192" viewBox="0 0 965 192" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M127.464 142.481C-18.8682 100.644 0.893704 0 0.893704 0H938.5C938.5 0 965 37 965 82.5C965 128 935 176.5 865.5 187.5C823.076 194.215 772.382 192.615 731.058 179.59C659.506 157.037 592.19 144.09 522.991 157.037C369.833 185.693 273.796 184.317 127.464 142.481Z" fill="url(#paint0_linear_213_3)"/>
    <defs>
    <linearGradient id="paint0_linear_213_3" x1="458.5" y1="0" x2="458.5" y2="545.452" gradientUnits="userSpaceOnUse">
    <stop stop-color="#125D35"/>
    <stop offset="0.244792" stop-color="#1B9861"/>
    </linearGradient>
    </defs>
    </svg>



    <nav class="navbar navbar-expand-lg stroke">
        <a href="{{route('index')}}" class="navbar-brand"><img src="{{ asset('img/logo_green.svg')}}" alt="AEPABrandLogo" width="200" height="50"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav text-center">
                <!-- Add the "ml-auto" class to align items to the right -->
                <a class="nav-item nav-link active" href="#">ASSOCIAÇÃO</a>
                <a class="nav-item nav-link" href="{{ route('topDonates')}}">DOAÇÕES</a>
                <a class="nav-item nav-link" href="#">EVENTOS</a>
                <a class="nav-item nav-link" href="#">VOLUNTARIADO</a>
                <a class="nav-item nav-link" href="#">PROJETOS</a>
                <a><button class="btn">LOGIN</button></a>
            </div>
        </div>
    </nav>
</header><!-- End Header -->  


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      
    </div>

  </section><!-- End Hero -->
  @yield('main')
 
    
  <!-- ======= Footer ======= -->
  <footer id="footer">

    
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset ('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset ('/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset ('/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset ('/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset ('/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{ asset ('/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset ('/js/main.js')}}"></script>

</body>

</html>