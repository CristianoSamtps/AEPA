@extends('layouts.master')

@section('title', 'Sobre nós')

@section('styles')

<link href="{{ asset ('/css/styleIndex.css') }}" rel="stylesheet">
<link href="{{ asset ('/css/stylesobreNos.css') }}" rel="stylesheet">
@endsection

@section('main')

<main id="main">
  <section class="container" id="indexHero">
    <div class="container">
      <div class="row">
        <div class="col-md-6 heroinfo">
          <h1>História e Missão</h1>
          <h5>Juntos pela Natureza, a AEPA trilha caminhos de preservação e sustentabilidade. Somos uma comunidade comprometida com a projeção do ambiente.
          </h5>
          <div id="sobreCards" class="d-flex">
              <div id="card-box">
                <h4>100.000
                  hectares
                    replantados</h4>
                <p>Reconstruir o ambiente ao nosso redor e manter as florestas limpas</p>
              </div>
              <div id="card-box">
                <h4>5000 
                    produtos
                    reciclados</h4>
                <p>Reconstruir o ambiente ao nosso redor e manter as florestas limpas</p>
              </div>
              <div id="card-box">
                <h4>+3000 
                    voluntários
                    anuais</h4>
                <p>Reconstruir o ambiente ao nosso redor e manter as florestas limpas</p>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div id="herosvg">

            <object data="{{asset ('img/TakingcareoftheEarth.svg')}}" type="image/svg+xml"></object>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End #hero -->

  

</main><!-- End #main -->


@endsection
