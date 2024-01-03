@extends('layouts.master')

@section('title', 'Evento')

@section('styles')
    <link href="{{ asset('/css/styleIndex.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/eventos.css') }}" rel="stylesheet">
@endsection

@section('main')

    <main id="main">
        <section class="container eventosHero" style="background-image:url('{{ asset('storage/event_photos/' . $event->photos()->orderBy('destaque','asc')->orderBy('created_at','desc')->first()->fotografia) }}')" id="indexHero">
            <div class="">
                <div class="col-md-9 eventosinfo">
                    <div class="eventcontent">
                        <h1>{{$event->name}}</h1>
                        <h5>Dia {{ date_format(date_create($event->data), 'd-m-Y') }}</h5>
                        <p>{{$event->descricao}}</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid d-flex mt-5 col-md-10" id="eventform">
                <div class="forminfo col-md-6">
                    <h4>Titulo exemplo</h4>
                    <p>Data</p>
                    <p>Localizacao</p>
                    <p>Compartilhe com os seus amigos e familiares</p>
                    <div class="socialicons">
                        <img src="">
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="">
                        <h4>Participe já</h4>
                        <input type="text" name="name" placeholder="Nome completo">
                        <br><br>
                        <input type="email" name="email" placeholder="Email">
                        <br><br>
                        <a href=""><button class="newest" style="float: right">Participar</button></a>
                    </form>
                </div>
            </div>
            <div class="container d-flex justify-content-center col-md-12">
                <div class="col-md-6">
                    <h4>Detalhes do evento</h4>
                </div>
                <div class="col-md-6">
                    <h4>Contactos</h4>
                    <p>Telemóvel</p>
                    <p>+351 961235123</p>
                    <br>
                    <p>Email</p>
                    <p>aepa.eventos@aepa.pt</p>
                    <br>
                    <p>Organizador</p>
                    <p>Cristiano Miguel Gomes dos Santos</p>
                </div>
            </div>
        </section>


        <div class="heroBackground">
        </div>
        <section class="container">
            <div class="eventoscards row" style="margin-top: 350px">
                <div class="d-flex col-md-12 eventosfiltersection">
                    <div class="col-md-6">
                        <h2 class="text-left m-2">Outros eventos</h2>
                    </div>
                    <div class="col-md-6 d-flex flex-row-reverse eventosfilter">
                        <a href=""><button class="all">Todos</button></a>
                        <a href=""><button class="newest">Os mais recentes</button></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="container hidden2 eventoslist">
            <div class=" d-flex justify-content-between ">
                @foreach ($events->take(4) as $event)
                    <div class="eventoCard col-md-3">
                        <div class="eventoCardImg ">
                            @if (count($event->photos))
                                <img src="{{ asset('storage/event_photos/' .$event->photos()->orderBy('destaque', 'asc')->orderBy('created_at', 'desc')->first()->fotografia) }}"
                                    class="img-post" alt="Event image">
                            @else
                                <img src="{{ asset('storage/event_photos/defaultevent.jpg') }}" class="img-post"
                                    alt="default image">
                            @endif
                            {{-- <img src="{{asset ('img/eventos/projetorios.png')}}" alt="Projeto Rios"> --}}
                        </div>
                        <div class="cardInfo text-center">
                            <h5 class="">{{ $event->name }}</h5>
                            <p class="cardDescription">{{ $event->descricao }}</p>
                            <a href="{{ route('eventos') }}"><button class="btn CardBtn">Saber mais</button></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>


        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function() {
                var cardDescription = $('.cardDescription');
                cardDescription.text(cardDescription.text().substring(0, 60));
            });
        </script>
    @endsection
