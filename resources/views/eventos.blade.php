@extends('layouts.master')

@section('title', 'Eventos')

@section('styles')

<link href="{{ asset ('/css/styleIndex.css') }}" rel="stylesheet">
<link href="{{ asset ('/css/eventos.css') }}" rel="stylesheet">
@endsection

@section('main')

<main id="main">
@if($topevent)
  <section class="container eventosHero" style="background-image:url('{{ asset('storage/event_photos/' . $topevent->photos()->orderBy('destaque','asc')->orderBy('created_at','desc')->first()->fotografia) }}')" id="indexHero">
      <div class="row">
        <div class="col-md-9 eventosinfo">
          <div class="eventcontent">
            <h1>{{$topevent->name}}</h1>
            <h5>Dia {{ date_format(date_create($topevent->data), 'd-m-Y') }}</h5>
            <p>{{$topevent->descricao}}</p>
            <a href="{{ route('eventoinfo',['event'=> $topevent])}}"><button class="btn section-btn1">Participar</button></a>
            <a href="{{ route('eventos') }}"><button class="btn section-btn2">Saber mais</button></a>
          </div>
        </div>
      </div>
  </section>
  @else
  <section class="container eventosHero" style="background-image:url('{{ asset('storage/event_photos/' . $topevent->photos()->orderBy('destaque','asc')->orderBy('created_at','desc')->first()->fotografia) }}')" id="indexHero">
    <div class="row">
        <h4>Ainda não existem eventos disponiveis.</h4>
    </div>
</section>
@endif
<div class="heroBackground">
</div>
  <section class="container">
      <div class="eventoscards row">
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
  <section class="container eventoslist">
    <div class=" d-flex justify-content-between ">
        @foreach($events->take(4) as $event)
        <div class="eventoCard col-md-3">
          <div class="eventoCardImg ">
            @if (count($event->photos))
            <img src="{{ asset('storage/event_photos/' . $event->photos()->orderBy('destaque','asc')->orderBy('created_at','desc')->first()->fotografia) }}"
                class="img-post" alt="Event image">
                @else
                <img src="{{ asset('storage/event_photos/defaultevent.jpg')}}"
                 class="img-post" alt="default image">
            @endif
            {{-- <img src="{{asset ('img/eventos/projetorios.png')}}" alt="Projeto Rios"> --}}
          </div>
          <div class="cardInfo text-center">
            <h5 class="">{{$event->name}}</h5>
            <p class="cardDescription">{{($event->descricao)}}</p>
            <a href="{{ route('eventos') }}"><button class="btn CardBtn">Saber mais</button></a>
          </div>
        </div>
        @endforeach
      </div>
  </section>


  <section class="container " id="sponsors">
    <div class="container">
      <div class="row justify-content-between flex-md-row flex-sm-column">
        <p class="text-center text-secondary mb-5">Conhece os nossos parceiros</p>
      <div class="col-md-3 sponsercell">
        <img src="{{asset ('img/patrocinios/method.png')}}" alt="Logotipo Method">
      </div>
      <div class="col-md-3 sponsercell">
        <img src="{{asset ('img/patrocinios/amora.png')}}" alt="Logotipo Amora">
      </div>
      <div class="col-md-3 sponsercell">
        <img src="{{asset ('img/patrocinios/Ecover.png')}}" alt="Logotipo Ecover">
      </div>
      <div class="col-md-3 sponsercell">
        <img src="{{asset ('img/patrocinios/vestas.png')}}" alt="Logotipo Vestas">
      </div>
    </div>
  </div>
</section>

<section class="container" id="second-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-5">
        <h1 class="mb-3">Queres participar num evento da nossa associação?</h1>
        <h5 class="mb-5 lh-base">Juntar a comunidade que torna este sonho realidade e fazer um evento de recordar, ajudas em projetos de reconstrução ambiental e disciplinate-te para um futuro melhor.
        </h5>
        <a><button class="btn green-btn1">Participar</button></a>
        <a><button class="btn hero-btn2">Saber mais</button></a>
      </div>
      <div class="col-md-6">
        <div id="herosvg">
          <object data="{{asset ('img/eventos.svg')}}" type="image/svg+xml"></object>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="background">
  <img src="{{asset ('img/greyvector.svg')}}" alt="efeito de fundo">
</div>

<section class="container mt-5" id="third-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div id="herosvg">
          <object width="450" data="{{asset ('img/Forest-amico.svg')}}" type="image/svg+xml"></object>
        </div>
      </div>
      <div class="col-md-6 heroinfo">
        <h1 class="mb-3">Porquê?</h1>
        <h5 class="mb-5 lh-base">Oferecer a oportunidade única de contribuir ativamente para a preservação do nosso planeta, enquanto nos conectamos com uma comunidade dedicada à sustentabilidade
        </h5>
        <a><button class="btn green-btn1">Saber mais</button></a>
      </div>
    </div>
  </div>
</section>
<!-- Proteção ambietal-->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function(){
        var cardDescription = $('.cardDescription');
        cardDescription.text(cardDescription.text().substring(0, 60));
    });
</script>
@endsection
