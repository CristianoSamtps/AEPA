<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login - AEPA</title>
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
    <link href="{{ asset('/css/styleIndex.css') }}" rel="stylesheet">

</head>

<body>
    <div class="loginformbg"></div>
    {{--  <div class="login">
        </div> --}}

    <section class="container loginpage">
        <div class="row justify-content-center align-items-center" style="height: 90vh;">
            <div class="newuser col-lg-6">
                <h1>Ainda não fazes parte?</h1>
                <p>Para obteres mais informações sobre os processos de desenvolvimento dos projetos ou
                    visualizares
                    o teu histórico de doações.</p>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"><button type="submit" class="btn RegBtn">Criar
                            conta</button></a>
                @endif
            </div>

            <div class="col-lg-6 loginform">
                <div class="loginnow">
                    <a href="{{ route('index') }}"><img class="logodesktop" src="{{ asset('img/logo_green.svg') }}"
                            alt="AEPABrandLogo" height="50"></a>
                    <a href="{{ route('index') }}">
                        <img class="logomobile" src="{{ asset('img/logo/logo_white.svg') }}" alt="AEPABrandLogo"
                            height="50"></a>

                    <h1 class="text-right">{{ __('Iniciar sessão') }}</h1>
                    <p>Utiliza o e-mail para acederes a tua conta</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-4">
                            <input id="email" type="email" placeholder="Endereço de email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <input id="password" type="password" placeholder="Palavra-passe"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Relembrar conta') }}
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a style="padding: 0px" class="btn forgotbtn mb-2"
                                    href="{{ route('password.request') }}">
                                    {{ __('Esqueceu-se da palavra-passe?') }}
                                </a>
                            @endif
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="loginRegBtns p-2">
                                {{ __('Entrar') }}
                            </button>
                        </div>
                    </form>
                    @if (Route::has('register'))
                        <a class="regmobile" href="{{ route('register') }}"><button type="submit"
                                class="btn RegBtn">Criar
                                conta</button></a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <div id="preloader">
    </div>

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
