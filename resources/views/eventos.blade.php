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
  </section>

  <section class="container">
      <div class="eventoscards row">
        <div class="d-flex col-md-12 eventosfiltersection">
          <div class="col-md-6">
           <h2 class="text-left m-2">Outros eventos</h2>
         </div>
         <div class="col-md-6 d-flex flex-row-reverse eventosfilter">
           <a href=""><h4 class="m-2 unselected">Todos</h4></a>
           <a href=""><h4 class="m-2 selected">Recentes</h4></a>
         </div>
       </div>
     </div>
   </section>

  <section class="container eventoslist">
    <div class=" d-flex justify-content-between">
        <div class="eventoCard col-md-3">
          <div class="eventoCardImg ">
            <img src="{{asset ('img/eventos/projetorios.png')}}" alt="Projeto Rios">
          </div>
          <div class="cardInfo text-center">
            <h4>Projeto Rios</h4>
            <p>Limpeza e monitorização do troço adotado do rio.</p>
            <a href="{{ route('eventos') }}"><button class="btn CardBtn">Saber mais</button></a>
          </div>
        </div>

        <div class="eventoCard col-md-3">
          <div class="eventoCardImg ">
            <img src="{{asset ('img/eventos/projetorios.png')}}" alt="Projeto Rios">
          </div>
          <div class="cardInfo text-center">
            <h4>Projeto Rios</h4>
            <p>Limpeza e monitorização do troço adotado do rio.</p>
            <a href="{{ route('eventos') }}"><button class="btn CardBtn">Saber mais</button></a>
          </div>
        </div>

        <div class="eventoCard col-md-3">
          <div class="eventoCardImg ">
            <img src="{{asset ('img/eventos/gogreen.png')}}" alt="Projeto Rios">
          </div>
          <div class="cardInfo text-center">
            <h4>GoGreen</h4>
            <p>Limpeza e monitorização do troço adotado do rio.</p>
            <a href="{{ route('eventos') }}"><button class="btn CardBtn">Saber mais</button></a>
          </div>
        </div>

        <div class="eventoCard col-md-3">
          <div class="eventoCardImg ">
            <img src="{{asset ('img/eventos/projetorios.png')}}" alt="Projeto Rios">
          </div>
          <div class="cardInfo text-center">
            <h4>Projeto Rios</h4>
            <p>Limpeza e monitorização do troço adotado do rio.</p>
            <a href="{{ route('eventos') }}"><button class="btn CardBtn">Saber mais</button></a>
          </div>
        </div>
      </div>
  </section>


  <section class="container" id="sponsors">
    <div class="container">
      <div class="row justify-content-between flex-md-row flex-sm-column">
       <div class="col-md-12">
        <p class="text-center text-secondary">Conhece os nossos parceiros</p>
      </div>
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

<section class="container" id="">
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


<div class="background">
  <img src="{{asset ('img/greyvector.svg')}}" alt="efeito de fundo">
</div>

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
