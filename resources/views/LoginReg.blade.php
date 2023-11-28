<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login/Registo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.svg') }}" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300&family=Raleway:wght@500&display=swap"
  rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

  <link href="{{ asset('/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/css/masterstyle.css') }}" rel="stylesheet">

</head>

<body>


  <section class="container p-5 mt-5 d-flex">
    <div class="container p-5">
      <div class="row justify-content-center align-items-center">
      <h1>Bem vindo de volta</h1>
      <p>Descobre as novidades que temos para te oferecer, continua esta jornada conosco.</p>
      <form>
        <button type="submit" class="btn btn-primary">Registar</button>
      </form>
    </div>
    </div>
    
  <div class="container p-5">
    <div class="row justify-content-center align-items-center">
      <h1>Criar conta</h1>
      <p>Utiliza um e-mail que não te esqueças, podes sempre recuperar a conta futuramente.</p>
      <form>
        <div class="form-group mb-2">
          <label for="exampleInputEmail1">Nome completo</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Indique o nome completo">
         
        </div>
        <div class="form-group mb-2">
          <label for="exampleInputPassword1">Email</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Indique o email">
        </div>
        <div class="form-group mb-4">
          <label for="exampleInputPassword1">Palavra-passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Indique a palavra-passe">
        </div>

        <!-- <div class="form-group mb-4">
          <label for="exampleInputPassword1">Validar palavra-passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Valide a palavra-passe">
        </div> -->
        
        <button type="submit" class="btn btn-primary">Registar</button>
      </form>
    </div>
  </div>
  </section>








  <!-- Vendor JS Files -->
  <script src="{{ asset('/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/js/main.js') }}"></script>

</body>

</html>
