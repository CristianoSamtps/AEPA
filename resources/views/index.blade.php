@extends('layouts.master')

@section('title', 'AEPA')

@section('styles')
<link href="{{ asset ('/css/styleIndex.css') }}" rel="stylesheet">
@endsection

@section('main')

<main id="main"> 
  <section class="container" id="indexHero">
    <div class="container">
      <div class="row">
        <div class="col-md-6 heroinfo">
          <h1>Já conheces a missão da nossa associação?</h1>
          <h5>Com mais de 12 mil apoiantes já reconstruímos centenas de hectares! Tudo graças à nossa maravilhosa equipa.
          </h5>
          <a><button class="btn green-btn1">Associação</button></a>
          <a><button class="btn hero-btn2">Doações</button></a>
        </div>
        <div class="col-md-6">
          <div id="herosvg">
            <img src="{{asset ('img/heroanimation.svg')}}" alt="index_animation">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End #hero -->

  <!-- Start #content -->
  <div class="indexContentwrapper">
    <section class="container hidden" id="indexContent">
     <div class="row contentimg">
      <div class="col-md-12">
        <img src="{{ asset('img/nature_fam.svg')}}">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 info-row mid-section-info">
        <div>
          <h3>Faça um dia em família</h3>
          <p>apoie esta causa e crie momentos para relembrar</p> 
        </div>
        <div id="sectionbtn">
          <a><button class="btn section-btn1">Associação</button></a>
          <a><button class="btn section-btn2">Doações</button></a>
        </div>
      </div>
    </div>
  </section>
</div> 

<!-- Projetos -->

<section class="container" id="projectssection">
  <div class="container">
    <div class="row">
      <div class="col-md-6 hidden">
        <p class="sectionIndicator">Projetos</p>
        <h1>Estamos a construir um mundo melhor, com um futuro sustentável e duradouro.</h1>
        <a><button class="btn green-btn1">Ver mais Projetos</button></a>
      </div>
      <div class="col-md-6 hidden2">
        <div class="d-flex projects carousel-track" id="carouselTrack">
          <div class="item projimg">
            <div class="item-info">
              <div class="item-info-container">
                <p class="projshowtile"><span>1</span> Pinhal de Leiria</p>
                <p class="proj-info">A reconstrução do pinhal de Leiria é dos projetos mais ambiciosos da AEPA.</p>
              </div>
            </div>
              <img src="{{asset ('img/projLeiria.png')}}" alt="projLeiria">
              <p class="projarrow">Saber mais -></p>
          </div>

          <div class="item projimg">
            <div class="item-info">
              <div class="item-info-container">
                <p class="projshowtile"><span>2</span> Caranguejeira</p>
                <p class="proj-info">Os piores acontecimentos dos últimos anos, o processo de recuperação precisa da tua ajuda.</p>
              </div>
            </div>
            <div>
              <img src="{{asset ('img/projCaranguejeira.png')}}" alt="projCaranguejeira">
               <p class="projarrow">Saber mais -></p>
            </div>
          </div>

          <div class="item projimg">
            <div class="item-info">
              <div class="item-info-container">
                <p class="projshowtile"><span>3</span> Pedrogão Grande</p>
                <p class="proj-info">A evolução da recomposição dos pinhais de Pedrógão Grande tem alcançado números extraordinários.</p>
                <span class="projarrow"> <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i> </span>
              </div>
            </div>
            <div>
              <img src="{{asset ('img/projPedrograoG.png')}}" alt="projPedrograoG">
               <p class="projarrow">Saber mais -></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</main><!-- End #main -->


        @endsection