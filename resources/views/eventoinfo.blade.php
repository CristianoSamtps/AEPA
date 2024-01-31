@extends('layouts.master')

@section('title', 'Evento')

@section('styles')
    <link href="{{ asset('/css/styleIndex.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/eventos.css') }}" rel="stylesheet">
@endsection

@section('main')
    <main id="main">
        <div class="container col-md-12">
            @if ($errors->any())
                @include ('layouts.partials.error_master')
            @endif
            @if (!empty(session('success')))
                @include ('layouts.partials.modal_master')
            @endif
        </div>
        <section class="container eventosHero"
            style="background-image:url('{{ asset('storage/event_photos/' .$event->photos()->orderBy('destaque', 'asc')->orderBy('created_at', 'desc')->first()->fotografia) }}')"
            id="indexHero">
            <div class="">
                <div class="col-md-12 eventosinfo">
                    <div class="eventcontent" style="text-align: center;padding-top:100px;">
                        <h1 style="font-weight: 700;font-size:40px;">{{ $event->name }}</h1>
                    </div>
                </div>
            </div>

            <div class="container-fluid d-flex mt-5 col-md-10 col-12" id="eventform">
                <div class="forminfo col-md-6 col-12">
                    <h4>Detalhes do evento</h4>
                    <div class="row">
                        <div class="col-md-6 ">
                            <p class="datatype">Data do evento</p>
                            <p>{{ date_format(date_create($event->data), 'd-m-Y') }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="datatype">Vagas do eventos</p>

                            <p>{{ $vagasDisponiveis = $event->vagas - $event->participants->count() }} vagas disponiveis</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="datatype">Localização</p>
                            <p>{{ $event->localizacao }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="datatype">Horário</p>
                            <p>{{ date_format(date_create($event->data), 'H:i') }}</p>
                        </div>
                    </div>
                    <div class="socialicons mt-5">
                        <h5 class="shortinfo">Compartilhe com os seus amigos e familiares</h5>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f icon"></i> </a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-x icon"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram icon"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-whatsapp icon"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-12" id="formform">
                    <!-- Evento lotado -->
                    @if ($event->participants()->count() >= $event->vagas)
                        <div class="eventfull">
                            <h4>Evento lotado</h4>
                            <input type="text" name="name" placeholder="Nome completo" class="mb-3"
                                value="{{ auth()->user()->name }}" disabled>
                            <input type="email" name="email" placeholder=" Email" value="{{ auth()->user()->email }}"
                                class="mb-3" disabled>
                            <textarea class="mb-3" disabled style="width:100%; padding:0.5rem;" cols="auto" rows="3"
                                placeholder="Observações"></textarea>
                            @if ($event->participants()->where('member_doner_id', auth()->user()->id)->first())
                                <button class="oldest" style="float: right;width:100%;">Cancelar registo</button>
                            @else
                                <button class="oldest" style="float: right;width:100%;">O evento encontra-se lotado</button>
                            @endif
                        </div>
                    @else
                        <!-- Evento com vagas disponiveis -->
                        <form action="{{ route('registarevento', $event) }}" id="eventform" method='POST'>
                            @csrf
                            <!-- Participante já inscrito -->
                            @if ($event->data < now())
                                <h4>O evento está
                                    terminado</h4>
                            @elseif ($event->participants()->where('member_doner_id', auth()->user()->id)->first())
                                <h4>Já estás inscrito</h4>
                            @else
                                <!-- Participante não inscrito -->
                                <h4>Participe já</h4>
                            @endif

                            <!-- Formulário da participacao -->
                            <input type="text" name="name" placeholder=" Nome completo" class="mb-3"
                                value="{{ auth()->user()->name }}" disabled>
                            {{-- <br><br> --}}

                            <input type="email" name="email" placeholder=" Email" value="{{ auth()->user()->email }}"
                                class="mb-3" disabled>
                            {{-- <br><br> --}}
                            @if ($event->data < now())
                                <textarea class="mb-3" disabled style="width:100%; padding:0.5rem;" cols="auto" rows="3"
                                    placeholder="Observações"></textarea>
                                <!-- Participante já inscrito -->
                            @elseif ($event->participants()->where('member_doner_id', auth()->user()->id)->first())
                                <textarea disabled style="width:100%; padding:0.5rem;" cols="auto" rows="3" placeholder="Observações"></textarea>
                            @else
                                <textarea style="width: 100%; padding:0.5rem;" name="obs" id="obs" cols="auto" rows="3"
                                    class="mb-3" placeholder="Observações"></textarea>
                            @endif
                            {{-- <br><br> --}}
                            @if ($event->participants()->where('member_doner_id', auth()->user()->id)->first())
                            @elseif ($event->data < now())
                                <button class="oldest" disabled style="float: right;width:100%;">O evento está
                                    terminado</button>
                            @else
                                <!-- Button trigger modal -->
                                <button type="submit" style="width:100% !important" class="newest green-btn1"
                                    data-toggle="modal" data-target="#exampleModal">
                                    Participar
                                </button>
                            @endif
                        </form>
                        @if ($participant = $event->participants()->where('member_doner_id', auth()->user()->id)->first())
                            {{-- Usuário inscrito /  fomulário para cancelar registo --}}
                            <form action="{{ route('cancelarreg', ['participant' => $participant->id]) }}" method="POST"
                                onsubmit="return confirm('Confirma que pretende cancelar inscrição?');">
                                @csrf
                                @method('DELETE')
                                <button class="oldest" style="float: right; width:100%;">Cancelar registo</button>
                            </form>
                        @endif

                    @endif
                    <p class="formmin mt-4">Entre em contacto para realizar visita de estudo, ou grupos de maiores
                        dimensões
                        <a style="color:black; text-decoration:underline" href="#eventinfo">aqui</a>.
                    </p>
                </div>
            </div>
        </section>

        <div class="container d-flex col-md-7 col-12 text-justify eventinfo" id="eventinfo">
            <style>
                @media only screen and (max-width: 562px) {
                    div#eventinfo {
                        margin-top: 0px !important;
                    }
                }
            </style>
            <div class="col-md-8 col-12 p-4">
                <h4 class="mb-4">Informações adicionais</h4>
                <ul>
                    <li class="mb-3">Descrição: {{ $event->descricao }}</li>
                    <li class="mb-3">Vagas do eventos: {{ $event->vagas }}</li>
                    <li class="mb-3">Data de criação: {{ date_format(date_create($event->created_at), 'd-m-Y') }}</li>
                    <li class="mb-3">Número de identificação do evento: {{ $event->id }}</li>
                    <li class="mb-3">Parcerias:
                        @foreach ($event->partnerships as $partner)
                            {{ $partner->name }}{{ $loop->last ? '' : ',' }}
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-12 p-4">
                <h4 class="mb-4">Contactos</h4>
                <p class="infolabel">Telemóvel</p>
                <p>+351 961235123</p>
                <p class="infolabel">Email</p>
                <p>aepa.eventos@aepa.pt</p>
                <p class="infolabel">Organizador</p>
                <p>Cristiano Miguel Gomes dos Santos</p>
            </div>
        </div>

        <div class="heroBackground">
        </div>

        <section class="container">
            <div class="eventoscards row">
                <div class="d-flex col-lg-12 eventosfiltersection">
                    <div class="col-lg-6">
                        <h2 class="text-left m-2">Outros eventos</h2>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end m-2">
                        <form action="{{ route('eventoinfo', $event) }}" method="GET">
                            @csrf
                            <label for="order_by_date">Ordenar por:</label>
                            <select name="order_by_date" id="order_by_date" class="m-2">
                                <option value="asc">Mais antigo</option>
                                <option value="desc">Mais recente</option>
                                <option value="all">Todos</option>
                            </select>
                            <button type="submit" class="green-btn1">Filtrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="container eventoslist" data-aos="fade-up">
            <div class="row d-flex justify-content-center">
                @foreach ($events as $event)
                    <div class="eventoCard col-lg-3 col-md-6 col-sm-12 mb-4 m-3 p-0">
                        @if ($event->data < now())
                            <button class="eventover m-4 p-2" disabled>Evento terminado</button>
                        @endif
                        <div class="eventoCardImg">
                            @if (count($event->photos))
                                <img src="{{ asset('storage/event_photos/' .$event->photos()->orderBy('destaque', 'asc')->orderBy('created_at', 'desc')->first()->fotografia) }}"
                                    class="img-post" alt="Event image">
                            @else
                                <img src="{{ asset('storage/event_photos/defaultevent.jpg') }}" class="img-post"
                                    alt="default image">
                            @endif
                        </div>
                        <div class="cardInfo text-center">
                            <h5>{{ $event->name }}</h5>
                            <p class="cardDescription">{{ $event->descricao }}</p>
                            <a href="{{ route('eventoinfo', ['event' => $event]) }}"><button class="btn CardBtn">Saber
                                    mais</button></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <div class="text-center mt-4">
            <button id="seeMoreBtn" class="green-btn1" onclick="toggleEventsVisibility()">Ver mais</button>
        </div>

        <section id="loading">
            <div id="loading-content"></div>
        </section>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function() {

                $('#exampleModal').modal('show');

                var eventoCards = $('.eventoCard');
                var maxVisible = 4;

                eventoCards.slice(maxVisible).addClass('hidden-event');

                if (eventoCards.length > maxVisible) {
                    $('#seeMoreBtnContainer').show();
                }
            });

            function toggleEventsVisibility() {
                var eventoCards = $('.eventoCard');
                var hiddenEvents = eventoCards.slice(4);

                var buttonText = hiddenEvents.filter(':visible').length > 0 ? 'Ver mais' : 'Ver menos';
                $('#seeMoreBtn').text(buttonText);

                hiddenEvents.toggleClass('hidden-event');
            }
        </script>

    @endsection
