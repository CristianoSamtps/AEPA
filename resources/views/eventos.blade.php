@extends('layouts.master')

@section('title', 'Eventos')

@section('styles')
    <link href="{{ asset('/css/styleIndex.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/eventos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('main')

    <main id="main">
        @if ($events->isEmpty())
            <section class="container" style="margin-bottom: -180px;">
                <div class="col-md-12">
                    <div id="herosvg">
                        <img src="{{ asset('img/notfound.svg') }}" alt="Sem eventos encontrados" style="height:400px">
                        <div class="imgtext col-md-8">
                            <h4>Não existem eventos disponiveis de momento</h4>
                        </div>
                    </div>
                </div>
            </section>
        @else
            @if ($topevent)
                <style>
                    section.eventosHero {
                        margin-top: 200px;
                    }
                </style>
                <section class="container eventosHero"
                    style="background-image:url('{{ asset('storage/event_photos/' .$topevent->photos()->orderBy('destaque', 'asc')->orderBy('created_at', 'desc')->first()->fotografia) }}')"
                    id="indexHero">
                    <div class="row">
                        <div class="col-md-9 eventosinfo">
                            <div class="eventcontent">
                                <h1>{{ $topevent->name }}</h1>
                                <h5>Dia {{ date_format(date_create($topevent->data), 'd-m-Y') }}</h5>
                                <p>{{ $topevent->descricao }}</p>
                                <a href="{{ route('eventoinfo', ['event' => $topevent]) }}"><button
                                        class="btn section-btn1">Participar <i id="participateicon"
                                            class="fa-solid fa-person-hiking"></i></button></a>
                            </div>
                        </div>
                    </div>
                </section>
            @else
                <section class="container eventosHero"
                    style="background-image:url('{{ asset('storage/event_photos/' .$topevent->photos()->orderBy('destaque', 'asc')->orderBy('created_at', 'desc')->first()->fotografia) }}')"
                    id="indexHero">
                    <div class="row">
                        <h4>Ainda não existem eventos disponiveis.</h4>
                    </div>
                </section>
            @endif
            <div class="heroBackground">
            </div>

            <section class="container">
                <div class="eventoscards row">
                    <div class="d-flex col-lg-12 eventosfiltersection">
                        <div class="col-lg-6">
                            <h2 class="text-left m-2">Outros eventos</h2>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-end m-2">
                            <form action="{{ route('eventos') }}" method="GET">
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

            <section class="container eventoslist" data-aos="fade-up" id="eventoslist">
                <div class="row d-flex justify-content-center">
                    @foreach ($events as $event)
                        <div class="eventoCard col-lg-3 col-md-6 col-sm-12 mb-4 m-4 p-0">
                            @if($event->data < now())
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
                                <div class="button"
                                    style="    position: relative;
                                display: flex;
                                justify-content: center;">
                                    <a href="{{ route('eventoinfo', ['event' => $event]) }}"><button
                                            class="btn CardBtn">Saber
                                            mais</button></a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
                </div>
            </section>
            <div class="text-center mt-4">
                <button id="seeMoreBtn" class="green-btn1" onclick="toggleEventsVisibility()">Ver mais</button>
            </div>
        @endif
        <section class="container" id="sponsors">
            <div class="container">
                <div class="row justify-content-between flex-md-row flex-sm-column">
                    @foreach ($patrocinadores->take('4') as $patrocinador)
                        <div class="col-md-3 sponsercell">
                            <img src="{{ asset('storage/partner_fotos/' . $patrocinador->foto) }}"
                                alt="{{ $patrocinador->name }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="container" id="second-section">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h1 class="mb-3">Queres participar num evento da nossa associação?</h1>
                    <h5 class="mb-5 lh-base">Juntar a comunidade que torna este sonho realidade e fazer um evento de
                        recordar, ajudas em projetos de reconstrução ambiental e disciplinate-te para um futuro melhor.
                    </h5>
                    <a href="#indexHero"><button class="green-btn1">Participar</button></a>
                    <a href="{{ route('sobreNos') }}"><button class="btn hero-btn2">Saber mais</button></a>
                </div>
                <div class="col-md-6">
                    <div id="herosvg">
                        <object data="{{ asset('img/eventos.svg') }}" type="image/svg+xml"></object>
                    </div>
                </div>
            </div>
        </section>

           <div class="background">
            <img src="{{ asset('img/greyvector.svg') }}" alt="efeito de fundo">
        </div>

        <section class="container mt-5" id="third-section">
            <div class="row">
                <div class="col-md-6">
                    <div id="herosvg">
                        <object width="450" data="{{ asset('img/Forest-amico.svg') }}" type="image/svg+xml"></object>
                    </div>
                </div>
                <div class="col-md-6 heroinfo">
                    <h1 class="mb-3">Porquê?</h1>
                    <h5 class="mb-5 lh-base">Oferecer a oportunidade única de contribuir ativamente para a preservação
                        do nosso planeta, enquanto nos conectamos com uma comunidade dedicada à sustentabilidade.
                    </h5>
                    <a href="{{ route('index') }}"><button class="green-btn1">Saber mais</button></a>
                </div>
            </div>
            </div>
        </section>

        <!-- Proteção ambietal-->

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function() {
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

                hiddenEvents.toggleClass('hidden-event');

                var buttonText = hiddenEvents.filter(':visible').length > 0 ? 'Ver mais' : 'Ver menos';
                $('#seeMoreBtn').text(buttonText);
            }
        </script>
    @endsection
