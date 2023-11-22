@extends('layouts.master')

@section('title', 'Eventos')

@section('styles')

<link href="{{ asset ('/css/styleIndex.css') }}" rel="stylesheet">
<link href="{{ asset ('/css/eventos.css') }}" rel="stylesheet">
@endsection

@section('main')

<main id="main">
  <div class="heroBackground">
  </div>
  <section class="container eventosHero" id="indexHero">
    <div class="container">
      <div class="row">
        <div class="col-md-8 eventosinfo">
          <div class="eventcontent">
          <h1>Dia nacional da árvore</h1>
          <h5>23 de janeiro </h5>
          <p>Juntar a comunidade que torna este sonho realidade e fazer um evento de recordar </p>
          <a><button class="btn section-btn1">Participar</button></a>
          <a href="{{ route('eventos') }}"><button class="btn section-btn2">Saber mais</button></a>
        </div>
        </div>
        <div class="col-md-6 text-center">
        </div>
      </div>
    </div>
  </section>
  <!-- End #hero -->

  <section class="container" id="sponsors">
    <div class="container">
      <div class="row">
         <div class="col-md-12">
          <p class="text-center text-secondary">Conhece os nossos parceiros</p>
         </div>
        <div class="col-md-3 sponsercell">
            <img src="{{asset ('img/patrocinios/method.png')}}" alt="background-effects">
        </div>
         <div class="col-md-3 sponsercell">
            <img src="{{asset ('img/patrocinios/amora.png')}}" alt="background-effects">
        </div>
         <div class="col-md-3 sponsercell">
            <img src="{{asset ('img/patrocinios/Ecover.png')}}" alt="background-effects">
        </div>
         <div class="col-md-3 sponsercell">
            <img src="{{asset ('img/patrocinios/vestas.png')}}" alt="background-effects">
        </div>
      </div>
    </div>
  </section>


  <div class="background">
    <img src="{{asset ('img/greyvector.svg')}}" alt="background-effects">
  </div>

  <section class="container" id="indexHero">
    <div class="container">
      <div class="row">
        <div class="col-md-6 heroinfo">
          <h1>Queres participar num evento da nossa associação?</h1>
          <h5>Juntar a comunidade que torna este sonho realidade e fazer um evento de recordar!
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

  <section class="container" id="indexHero">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div id="herosvg">
            <object data="{{asset ('img/eventos.svg')}}" type="image/svg+xml"></object>
          </div>
        </div>
        <div class="col-md-6 heroinfo">
          <h1>Porquê?</h1>
          <h5>Oferecer a oportunidade única de contribuir ativamente para a preservação do nosso planeta, enquanto nos conectamos com uma comunidade dedicada à sustentabilidade
          </h5>
        </div>
      </div>
    </div>
  </section>
  <!-- Proteção ambietal-->

  


    @endsection
