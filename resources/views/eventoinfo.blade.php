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
                <div class="col-md-12 eventosinfo">
                    <div class="eventcontent" style="text-align: center;padding-top:163px;">
                        <h1 style="font-weight: 700;font-size:40px;">{{$event->name}}</h1>
                        <h5 style="font-weight: 400;font-size:30px;">Dia {{ date_format(date_create($event->data), 'd-m-Y') }}</h5>
                    </div>
                </div>
            </div>
            <div class="container-fluid d-flex mt-5 col-md-10" id="eventform">
                <div class="forminfo col-md-6">
                    <h4>{{$event->name}}</h4>
                    <p>{{ date_format(date_create($event->data), 'd-m-Y') }}</p>
                    <p>{{$event->localizacao}}</p>
                    <div class="socialicons mt-5">
                        <h5 class="shortinfo">Compartilhe com os seus amigos e familiares</h5>
                        <img src="{{ asset('img/Ícones/Twitter.svg')}}">
                        <img src="{{ asset('img/Ícones/Whatsapp.svg')}}">
                        <img src="{{ asset('img/Ícones/Facebook.svg')}}">
                        <img src="{{ asset('img/Ícones/Instagram.svg')}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('registarevento',$event)}}" id="eventform" method='POST'>
                        @csrf
                        <h4>Participe já</h4>
                        <input type="text" name="name" placeholder=" Nome completo" value="{{auth()->user()->name}}" disabled>
                        <br><br>
                        <input type="email" name="email" placeholder=" Email" value="{{auth()->user()->email}}" disabled>
                        <br><br>
                        @if ($event->participants()->where('member_doner_id',auth()->user()->id)->first())
                        <textarea disabled cols="55" rows="3" placeholder=" Observações"></textarea>
                        @else
                        <textarea name="obs" id="obs" cols="55" rows="3" placeholder=" Observações"></textarea>
                        @endif
                        <br><br>
                        @if ($event->participants()->where('member_doner_id',auth()->user()->id)->first())
                        <button class="oldest" style="float: right;width:100%;">Já está registado no evento</button>
                        @else
                        <button type="submit" class="newest" style="float: right">Participar</button>
                        @endif
                    </form>
                    <p class="formmin mt-4">Entre em contacto para realizar visita de estudo, ou grupos de maiores dimensões <a href="">aqui</a>.</p>
                </div>
            </div>
        </section>

        <div class="container d-flex col-md-7 text-justify eventinfo">
            <div class="col-md-6 p-4">
                <h4 class="mb-4">Detalhes do evento</h4>
                <ul>
                    <li>{{$event->descricao}}</li>
                </ul>
            </div>
            <div class="col-md-6 p-4">
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
            <div class="eventoscards row" style="margin-top: 80px">
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

        <section class="container eventoslist" style="margin-bottom: 200px;">
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
