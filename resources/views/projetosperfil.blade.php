@extends('layouts.master')

@extends('layouts.usertemplate')

@section('title', 'AEPA - Projetos/Eventos')

@section('styles')
<link href="{{ asset('/css/projetosperfil.css') }}" rel="stylesheet">
@endsection

@section('main-content')


<div class="container-fluid">

    <!-- PROJETOS -->
    <h2 class="titulo">Projetos</h2>

    <div class="row" {{-- data-aos="fade-up" --}} data-aos-anchor-placement="bottom-bottom">
        <div class="col-lg-12" data-aos="fade-left" data-aos-anchor-placement="bottom-bottom">

            <div class="row">

                <!-- BOTÃO PARA ADICIONAR PROJETOS -->
                <a href="{{ route('projects') }}">
                    <div id="novaprojeto" data-aos="fade-down" class="col-lg-12">
                        <i class="fa-solid fa-circle-plus"></i>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-12" data-aos-anchor-placement="bottom-bottom">
            <div class="row">
                @if (count($projetos) > 0)
                @foreach ($projetos as $projeto)
                <div id="exprojeto" class="col-12 col-lg-4 projCards">
                    <a style="text-decoration: none; display: contents; width: 100%;" href="{{ route('project_details', ['projeto' => $projeto]) }}">

                        <!-- IMAGEM PROJETO -->
                        <div class="fundo-projeto">

                            @if ($projeto->fotografias)
                            <img src="{{ asset('storage/project_photos/' . $projeto->fotografias->first()->foto) }}" alt="Imagem do projeto" class="img-post">
                            @else
                            <img src="{{ asset('public/assets/images/project.jpg') }}" alt="Imagem do ilustrativaa">
                            @endif
                        </div>

                        <!-- INFO PROJETO -->
                        <div class="info-projeto">
                            <h1>{{ $projeto->titulo }}</h1>
                            <!-- Adicione outras informações do projeto conforme necessário -->
                            <button class="buttonjoin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                    <path d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z" fill="white" />
                                </svg>
                            </button>

                        </div>
                    </a>
                </div>
                @endforeach

                <div class="text-center mt-4" id="seeMoreBtnContainerProj">
                    <button id="seeMoreBtnProj" class="green-btn1" style="width:150px;" onclick="toggleProjVisibility()">Ver
                        mais</button>
                </div>

                @else
                <div id="semprojeto" data-aos="fade-left" class="col-lg-12">
                    <div class="fundo-projeto text-center">
                        <p>Não está a participar em nenhum projeto..</p>
                    </div>
                </div>
                @endif
            </div>
        </div>


    </div>

    <h2 class="titulos">Eventos</h2>

    <div class="row" {{-- data-aos="fade-up" --}} data-aos-anchor-placement="bottom-bottom">
        <div class="col-lg-12" {{-- data-aos="fade-left" --}} data-aos-anchor-placement="bottom-bottom">

            <div class="row">

                <a href="{{ route('eventos') }}">
                    <div id="novaprojeto" {{-- data-aos="fade-down" --}} class="col-lg-12">
                        <i class="fa-solid fa-circle-plus"></i>
                    </div>
                </a>
            </div>
        </div>

        @if (count($events) > 0)
        @foreach ($events as $event)
        <div id="exprojeto" class="col-12 col-lg-4 eventoCard">
            <a style="text-decoration: none; display: contents; width: 100%;" href="{{ route('eventoinfo', ['event' => $event]) }}">

                <div class="fundo-projeto">
                    @if ($event->photos)
                    <img src="{{ asset('storage/event_photos/' .$event->photos()->orderBy('destaque', 'asc')->orderBy('created_at', 'desc')->first()->fotografia) }}" alt="Imagem do evento" class="img-post">
                    @else
                    <img src="{{ asset('public/assets/images/project.jpg') }}" alt="Imagem do ilustrativa">
                    @endif
                </div>

                <div class="info-projeto">
                    <h1 style="text-decoration: none !important;">{{ $event->name }}</h1>
                    <!-- Adicione outras informações do projeto conforme necessário -->
                    <button class="buttonjoin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                            <path d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z" fill="white" />
                        </svg>
                    </button>
                </div>

                <div class="deletebutton">
                    <form action="{{ route('cancelarregperfil', ['user' => $user, 'event' => $event->id]) }}" method="POST" 
                    onsubmit="return confirm('Confirma que pretende cancelar inscrição?');">
                        @csrf
                        @method('DELETE')
                        <button class="apagar"><i class="fa-solid fa-circle-xmark"></i></button>
                    </form>
                </div>
            </a>
        </div>
        @endforeach
        <div class="text-center mt-4" id="seeMoreBtnContainer">
            <button id="seeMoreBtn" class="green-btn1" style="width:150px;" onclick="toggleEventsVisibility()">Ver
                mais</button>
        </div>
        @else
        <div id="semprojeto" data-aos="fade-left" class="col-lg-12">
            <div class="fundo-projeto text-center">
                <p>Não está a participar em nenhum Evento...</p>
            </div>
        </div>
        @endif
    </div>
</div>


</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {

        var projetoCards = $('.projCards');

        var eventoCards = $('.eventoCard');

        var maxVisible = 6;

        eventoCards.slice(maxVisible).addClass('hidden-event');

        projetoCards.slice(maxVisible).addClass('hidden-proj');

        if (eventoCards.length > maxVisible) {
            $('#seeMoreBtnContainer').show();
        } else {
            $('#seeMoreBtnContainer').hide();
        }

        if (projetoCards.length > maxVisible) {
            $('#seeMoreBtnContainerProj').show();
        } else {
            $('#seeMoreBtnContainerProj').hide();
        }

    });

    function toggleEventsVisibility() {
        var eventoCards = $('.eventoCard');
        var hiddenEvents = eventoCards.slice(6);

        var buttonText = hiddenEvents.filter(':visible').length > 0 ? 'Ver mais' : 'Ver menos';
        $('#seeMoreBtn').text(buttonText);

        hiddenEvents.toggleClass('hidden-event');
    }

    function toggleProjVisibility() {

        var projetoCards = $('.projCards');
        var hiddenProj = projetoCards.slice(6);

        var buttonText = hiddenProj.filter(':visible').length > 0 ? 'Ver mais' : 'Ver menos';
        $('#seeMoreBtnProj').text(buttonText);

        hiddenProj.toggleClass('hidden-proj');
    }
</script>

@endsection