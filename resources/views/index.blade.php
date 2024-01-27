@extends('layouts.master')

@section('title', 'AEPA')

@section('styles')
    <link href="{{ asset('/css/styleIndex.css') }}" rel="stylesheet">
@endsection

@section('main')

    <main id="main">
        <section class="container" id="indexHero">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 heroinfo">
                        <h1>Já conheces a missão da nossa associação?</h1>
                        <h5>Com mais de 12 mil apoiantes já reconstruímos centenas de hectares! Tudo graças à nossa
                            maravilhosa equipa.
                        </h5>
                        <a href="{{ route('sobreNos') }}"><button class="green-btn1 mb-2">Associação</button></a>
                        <a href="{{ route('doacoes') }}"><button class="hero-btn2 mb-2">Doações</button></a>
                    </div>
                    <div class="col-md-6">
                        <div id="herosvg">
                            <object data="{{ asset('img/heroanimation1.svg') }}" type="image/svg+xml"></object>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End #hero -->

        <!-- Start #content -->

        <div class="indexContentwrapper">
            <section class="container {{-- hidden2 --}}" id="indexContent">
                <div class="row contentimg">
                    <div class="col-md-12">
                        <img src="{{ asset('img/nature_fam.svg') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 info-row mid-section-info">
                        <div id="volinfo">
                            <h3>Faça um dia em família</h3>
                            <p>Apoie esta causa e crie momentos para relembrar.</p>
                        </div>
                        <div id="sectionbtn">
                            <a><button class="btn section-btn1">Voluntariado</button></a>
                            <a href="{{ route('eventos') }}"><button class="btn section-btn2">Eventos</button></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Projetos -->

        {{-- <div class="background">
            <img src="{{ asset('img/greenvector.svg') }}" alt="background-effects">
        </div> --}}

        <div class="indexContentwrapperProj">
            <section class="container" id="projectssection">
                <div class="row">
                    <div class="col-md-6 {{-- hidden2 --}}">
                        <p class="sectionIndicator">Projetos em destaque</p>
                        <h1>Estamos a construir um mundo melhor, com um futuro sustentável e duradouro.</h1>
                        <a class="link-light" href="{{ route('projects') }}"><button class="green-btn1">Ver mais
                                Projetos</button></a>
                    </div>
                    <div class="col-md-6 {{-- hidden2 --}}2">
                        <div class="d-flex projects carousel-track" id="carouselTrack">
                            @if ($projetos)
                                @foreach ($projetos as $key => $projeto)
                                    <div class="item projimg">
                                        <div class="item-info">
                                            <div class="item-info-container">
                                                <p class="projshowtile"><span class="projnumber">{{ $key + 1 }}</span>
                                                    {{ $projeto->localidade }}</p>
                                                <p class="proj-info text-left">{{ $projeto->subtitulo }}</p>
                                            </div>
                                        </div>
                                        @foreach ($fotografias as $fotografia)
                                            @if ($fotografia->projeto_id === $projeto->id)
                                                <img src="{{ asset('storage/project_photos/' . $fotografia->foto) }}"
                                                    alt="{{ $projeto->titulo }}">
                                            @break
                                        @endif
                                    @endforeach
                                    <a href="{{ route('projects') }}">
                                        <p class="projarrow">Saber mais <i class="fa-solid fa-arrow-right"
                                                style="color: #ffffff;"></i></p>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div>Não existem projetos de momento, contacte o administrador.</div>
                        @endif
                    </div>
                    <div id="itemselect">
                        <ul class="d-flex justify-content-center mt-5" style="list-style-type:none;padding:0px;">
                            <li class="p-3 m-2">1</li>
                            <li class="p-3 m-2">2</li>
                            <li class="p-3 m-2">3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="container {{-- hidden2 --}}" id="volsection">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="">Missão da AEPA</p>
                        <h1>Salvamos o planeta juntos<span class="spanenfase"></span></h1>
                        <h5>Com mais de 12 mil apoiantes já reconstruímos centenas de hectares! Tudo graças à nossa
                            maravilhosa equipa.
                        </h5>
                    </div>
                    <div class="col-md-12 row d-flex justify-content-center m-section mb-5">
                        <div class=" col-lg-3 col-sm-6">
                            <div class="d-flex justify-content-center">
                                <img class="volillustration" src="{{ asset('img/limpeza.svg') }}"
                                    alt="ilustração de limpeza">
                            </div>
                            <h3 class="text-center font-weight-bold">Limpeza</h3>
                            <p class="text-center">Fazer limpeza das florestas e reciclar materiais</p>
                        </div>
                        <div class=" col-lg-3 col-sm-6">
                            <div class="d-flex justify-content-center">
                                <img class="volillustration" src="{{ asset('img/seguranca.svg') }}"
                                    alt="ilustração de seguranca">
                            </div>
                            <h3 class="text-center font-weight-bold">Segurança</h3>
                            <p class="text-center">Manter as florestas fora de perigo de incêndio</p>
                        </div>
                        <div class=" col-lg-3 col-sm-6">
                            <div class="d-flex justify-content-center">
                                <img class="volillustration" src="{{ asset('img/plantacao.svg') }}"
                                    alt="ilustração de plantacao">
                            </div>
                            <h3 class="text-center font-weight-bold">Plantação</h3>
                            <p class="text-center">Ajudar na reconstrução das florestas e espaços verdes</p>
                        </div>
                        <div class=" col-lg-3 col-sm-6">
                            <div class="d-flex justify-content-center">
                                <img class="volillustration" src="{{ asset('img/cuidar.svg') }}"
                                    alt="ilustração de montanhas">
                            </div>
                            <h3 class="text-center font-weight-bold">Cuidar</h3>
                            <p class="text-center">Preservar o património florestal</p>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <a style="margin-right: 20px;" href="{{ route('sobreNos') }}"><button class="green-btn1">Sobre
                                nós</button></a>
                        <button type="button" class="green-btn1 video-btn" style="width: 150px !important" onclick="startvideo()"
                            data-bs-toggle="modal" data-src="{{ asset('img/videos/AEPA.mp4') }}"
                            data-bs-target="#myModal">
                            <span>Ver video</span> <i class="fa-solid fa-play" style="color: #ffffff;"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Video Promocional - AEPA</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="stopModalVideo()"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <video width="100%" height="auto" controls id="modalVideo">
                            <source src="{{ asset('img/videos/AEPA.mp4') }}" type="video/mp4" id="modalVideoSrc">
                        </video>
                    </div>
                </div>
            </div>
        </div>

        <section class="container" id="suguesection">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>A nossa comunidade é muita mais do que imaginas</h1>
                    <h5>Para chegarmos onde queremos precisamos da tua ajuda, a comunidade é o caminho para o
                        sucesso.
                    </h5>
                </div>
                <div class="col-md-12 row d-flex justify-content-center suguecards m-2" style="margin: 0px;padding:0px;">
                    @if ($sugestoesList)
                        @foreach ($sugestoesList as $sugestao)
                            <div class="sugue-box col-lg-3 col-sm-12 m-3">
                                <div class="d-flex">
                                    @if ($sugestao->member_doner->user->foto)
                                        <img src="{{ asset('storage/user_fotos/' . $sugestao->member_doner->user->foto) }}"
                                            alt="imagem de perfil de utilizador">
                                    @else
                                        <img src="{{ asset('img/default_user.jpg') }}" alt="Foto de perfil"
                                            class="profile-image">
                                    @endif
                                    <div>
                                        <h4 class="cardDescription">{{ $sugestao->member_doner->user->name }}</h4>
                                        <p class="text-white">Doador</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-justify">
                                        {{ $sugestao->sugestao }}
                                    </p>
                                </div>
                                <a href="{{ route('sugestoes') }}" class="align-self-end "><span
                                        class="more text-white underline">Saber
                                        mais</span></a>
                            </div>
                        @endforeach
                    @else
                        <div>Não existem sugestões de momento, contacte o administrador.</div>
                    @endif
                </div>
                <h5 class="text-center pb-4">Descobre as vantagens de te tornares membro.
                </h5>
                <div class="col-md-12 d-flex justify-content-center">

                    <a class="link-light" href="{{ route('tornarMembro') }}"><button class="green-btn1">Tornar
                            membro</button></a>
                    <a href="{{ route('sugestoes') }}"><button class="btn hero-btn2">Sugestões</button></a>
                </div>
            </div>
        </section>
    </div>
</main><!-- End #main -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    function startvideo() {
        var video = document.getElementById('modalVideo');
        video.play();
    }
function stopModalVideo() {
        var video = document.getElementById('modalVideo');
        video.pause();
    }
</script>

@endsection
