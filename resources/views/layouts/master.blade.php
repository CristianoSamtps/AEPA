<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/css/masterstyle.css') }}" rel="stylesheet">

    @yield('styles')

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <svg width="997" height="155" viewBox="0 0 997 155" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M119.832 113.279C-29.3934 71.3393 2.95979 0 2.95979 0H994.286C994.286 0 1000.39 45.1112 994.286 80.6988C988.18 116.287 961.653 149.869 893.329 154.38C825.004 158.892 759.739 137.86 704.671 120.798C631.704 98.1888 580.461 124.359 509.895 137.338C353.709 166.065 269.058 155.219 119.832 113.279Z"
                fill="url(#paint0_linear_214_4)" />
            <defs>
                <linearGradient id="paint0_linear_214_4" x1="469.614" y1="5.13046e-08" x2="469.614" y2="546.799"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#125D35" />
                    <stop offset="0.244792" stop-color="#1B9861" />
                </linearGradient>
            </defs>
        </svg>

        <nav class="navbar navbar-expand-lg stroke desktop">
            <a href="{{ route('index') }}" class="navbar-brand"><img src="{{ asset('img/logo_green.svg') }}"
                    alt="AEPABrandLogo" width="200" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav text-center">

                    <!-- Add the "ml-auto" class to align items to the right -->
                    <a class="nav-item m-0 nav-link" href="{{ route('index') }}">Início</a>
                    <a class="nav-item m-0  nav-link" href="{{ route('eventos') }}">Eventos</a>
                    <a class="nav-item m-0  nav-link" href="{{ route('projects') }}">Projetos</a>
                    <a class="nav-item m-0  nav-link" href="{{ route('doacoes') }}">Doações</a>
                    <a class="nav-item m-0  nav-link" href="{{ route('sobreNos') }}">Sobre Nós</a>

                    <div id="login_reg">
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link m-0  login" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link m-0  registo"
                                            href="{{ route('register') }}">{{ __('Criar conta') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link m-0  dropdown-toggle" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        @if (Auth::user()->tipo == 'A')
                                            <!-- Exibir apenas para usuários com tipo 'M' (Moderação/Admin) -->
                                            <a class="dropdown-item"
                                                href="{{ route('admin.dashboard', auth()->user()->tipo == 'A') }}">
                                                Painel Admin
                                            </a>
                                        @else
                                            <!-- Exibir para outros tipos de usuários -->
                                            <a class="dropdown-item" href="{{ route('indexperfil', auth()->user()) }}">
                                                Perfil
                                            </a>
                                            <a class="dropdown-item" href="{{ route('editperfil', auth()->user()) }}">
                                                Editar perfil
                                            </a>
                                        @endif

                                        <a id="logout" class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                        </div>
                    @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top mobile"
            style="background-color: #177F4E !important; margin-top:0px !important">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('img/logo/logo_white.svg') }}" alt="AEPABrandLogo" width="150"
                        height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" style="margin-right:20px"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto" style="margin-left: 27px !important;">
                        <li class="nav-item">
                            <a class="nav-link " href=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('eventos') }}">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('projects') }}">Projetos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('doacoes') }}">Doações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('sobreNos') }}">Sobre Nós</a>
                        </li>

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item mb-3">
                                    <a class="nav-link" href="{{ route('login') }}"
                                        style="border: white 1px solid;
                                    width: 100px;
                                    border-radius: 8px;
                                    text-align: center;">{{ __('ENTRAR') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"
                                        style="border: white 1px solid;
                                width: 100px;
                                border-radius: 8px;
                                text-align: center;">
                                        {{ __('REGISTAR') }} </a>
                                </li>
                            @endif
                        @else
                            @if (Auth::user()->tipo == 'A')
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <li><a style="color: black" class="dropdown-item"
                                                href="{{ route('admin.dashboard', auth()->user()->tipo == 'A') }}">Dashboard</a>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <li><a style="color: black" class="dropdown-item"
                                                href="{{ route('indexperfil', auth()->user()) }}">Perfil</a></li>
                                        <li><a style="color: black" class="dropdown-item"
                                                href="{{ route('editperfil', auth()->user()) }}">Editar perfil</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#"></a>
                                </li>
                                <li class="nav-item">
                                    <a id="logout"
                                        style="border: rgb(161, 9, 9) 1px solid;
                                        background:rgb(161, 9, 9);
                                    width: 100px;
                                    border-radius: 8px;
                                    color:white;
                                    text-align: center;"
                                        class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                    </form>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#"></a>
                                </li>
                            @endif
                        @endguest
                    </ul>
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

    <div id="preloader">
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- ======= Footer ======= -->
    <div class="footerbg">
    </div>

    <footer id="footer">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2023 AEPA</p>

            <a href="{{ route('index') }}"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="{{ asset('img/logo_green.svg') }}" alt="AEPABrandLogo" width="200" height="50">
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="https://wordpress.g1.dwm2023.fun/"
                        class="nav-link px-2 text-muted">Loja Online</a></li>
                <li class="nav-item"><a href="{{ route('patrocinadores') }}"
                        class="nav-link px-2 text-muted">Patrocinadores</a></li>
                </li>
                <li class="nav-item"><a href="{{ route('galeria') }}" class="nav-link px-2 text-muted">Galeria</a>
                </li>
            </ul>
        </footer>
    </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('/vendor/aos/aos.js') }}"></script>
    {{-- <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script> --}}
    {{--  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://kit.fontawesome.com/a441b233b6.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/js/main.js') }}"></script>
    @yield('moreScripts')
</body>

</html>
