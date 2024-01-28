<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Criar conta - AEPA</title>
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
    <link href="{{ asset('/css/LoginReg.css') }}" rel="stylesheet">

</head>

<body style="background: linear-gradient(#009E58, #017979);">
    <div class="regformbg"></div>

    <section class="container">
        <div class="row justify-content-center align-items-center" style="height: 90vh;">
            <div class="wellcomeback col-md-6">
                <a href="{{ route('index') }}"><img class="logodesktop" src="{{ asset('img/logo_green.svg') }}"
                        alt="AEPABrandLogo" height="50"></a>
                <div class="row justify-content-center align-items-center">
                    <h1>Bem vindo de volta</h1>
                    <p>Descobre as novidades que temos para te oferecer, continua esta jornada conosco.</p>

                    @if (Route::has('login'))
                        <a class="nav-link" href="{{ route('login') }}"><button type="submit"
                                class="loginRegBtns p-2">Entrar</button></a>
                    @endif

                </div>
            </div>
            <div class="create-ac col-md-6">
                <a href="{{ route('index') }}">
                    <img class="logomobile" src="{{ asset('img/logo/logo_white.svg') }}" alt="AEPABrandLogo"
                        height="50"></a>
                <h1>{{ __('Criação de conta') }}</h1>
                <p>Utiliza um e-mail que não te esqueças, podes sempre recuperar a conta futuramente.</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group mb-4">
                        <input id="name" type="text" placeholder="Nome completo"
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <input id="email" type="email" placeholder="Email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <input id="password" type="password" placeholder="Palavra-passe"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <input id="password-confirm" type="password" class="form-control"
                            placeholder="Confirmar palavra-passe" name="password_confirmation" required
                            autocomplete="new-password">
                    </div>
                    <button type="submit" class="btn RegBtn mt-2">
                        {{ __('Criar conta') }}
                    </button>
                </form>
                @if (Route::has('login'))
                    <a class="nav-link" href="{{ route('login') }}"><button type="submit"
                            class="loginRegBtns loginreg p-2">Entrar</button></a>
                @endif

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
