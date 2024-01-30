@extends('layouts.master')

@section('title', 'AEPA')

@section('styles')
<link href="{{ asset('/css/stylegaleria.css') }}" rel="stylesheet">
@endsection

@section('main')

<main id="main">
    <style>
        /* Default height for small devices */
        #intro-example {
            height: 400px;
        }

        /* Height for devices larger than 992px */
        @media (min-width: 992px) {
            #intro-example {
                height: 600px;
            }
        }
    </style>

    <div id="intro-example" class="p-5 text-center bg-image position-relative">
        <div class="mask d-flex justify-content-center align-items-center h-100">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Galeria</h1>
                    <h5 class="mb-4">
                        Um novo mundo connosco!
                    </h5>
                    <a href="{{ route('index') }}" class="btn btn-outline-light btn-lg m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A" role="button">Página Inicial</a>
                    <a href="#destaque" class="btn btn-outline-light btn-lg m-2" href="https://mdbootstrap.com/docs/standard/" role="button">Video <i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Projetos -->
    <div class="row" id="fragma">
        @php
        $fotosEmbaralhadas = $fotografias->shuffle()->take(6);
        @endphp

        @foreach ($fotosEmbaralhadas as $fotografia)
        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="{{ asset('storage/project_photos/' . $fotografia->foto) }}" class="w-100 shadow-1-strong rounded mb-4" alt="{{ $fotografia->descricao }}" />
        </div>
        @endforeach
    </div>


    <!-- Video -->
    <div class="destaque" id="destaque">
        <div class="row">
            <div class="col-sm-12 col-md-6" id="impactosocialinfo">
                <h1>Video Promocional</h1>
                <h4 id="infoinfo">
                    Na AEPA, não só plantamos árvores como cultivamos um impacto social duradouro. Cada ação nossa ecoa
                    na comunidade, promovendo consciência ambiental e transformando vidas.
                </h4>
            </div>
            <div class="col-sm-12 col-md-6 video">
                <video controls src="{{ asset('img/videos/AEPA.mp4') }}" width="550" height="340" autoplay muted style="margin-top: 100px;"></video>
            </div>
        </div>
    </div>

    <!-- Eventos -->
    <div class="row" id="fragma">
        @php
        $fotosEmbaralhadas = $fotografiaseventos->shuffle()->take(6);
        @endphp

        @foreach ($fotosEmbaralhadas as $fotografiaevent)
        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="{{ asset('storage/event_photos/' . $fotografiaevent->fotografia) }}" class="w-100 shadow-1-strong rounded mb-4" alt="{{ $fotografiaevent->descricao }}" />
        </div>
        @endforeach
    </div>
</main>