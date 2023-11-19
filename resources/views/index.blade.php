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

            <object data="{{asset ('img/heroanimation1.svg')}}" type="image/svg+xml"></object>
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
        <div id="volinfo">
          <h3>Faça um dia em família</h3>
          <p>Apoie esta causa e crie momentos para relembrar.</p>
        </div>
        <div id="sectionbtn">
          <a><button class="btn section-btn1">Voluntariado</button></a>
          <a><button class="btn section-btn2">Eventos</button></a>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Projetos -->

<div class="backgroud">
  <img src="{{asset ('img/greenvector.svg')}}" alt="background-effects">
</div>

<div class="indexContentwrapperProj">
  <section class="container" id="projectssection">
    <div class="container">
      <div class="row">
        <div class="col-md-6 hidden">
          <p class="sectionIndicator">Projetos em destaque</p>
          <h1>Estamos a construir um mundo melhor, com um futuro sustentável e duradouro.</h1>
          <a class="link-light" href="{{route('projects')}}"><button class="btn green-btn1">Ver mais Projetos</button></a>
        </div>
        <div class="col-md-6 hidden2">
          <div class="d-flex projects carousel-track" id="carouselTrack">
            <div class="item projimg">
              <div class="item-info">
                <div class="item-info-container">
                  <p class="projshowtile"><span class="projnumber">1</span> Pinhal de Leiria</p>
                  <p class="proj-info">A reconstrução do pinhal de Leiria é dos projetos mais ambiciosos da AEPA.</p>
                </div>
              </div>
              <img src="{{asset ('img/projLeiria.png')}}" alt="projLeiria">
              <p class="projarrow">Saber mais -></p>
            </div>
            <div class="item projimg">
              <div class="item-info">
                <div class="item-info-container">
                  <p class="projshowtile"><span class="projnumber">2</span> Caranguejeira</p>
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
                  <p class="projshowtile"><span class="projnumber">3</span> Pedrogão Grande</p>
                  <p class="proj-info">A evolução da recomposição dos pinhais de Pedrógão Grande tem alcançado números extraordinários.</p>
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
</div>

<section class="container hidden" id="volsection">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p class="">Missão da AEPA</p>
        <h1>Salvamos o planeta <span class="spanenfase">juntos</span></h1>
        <h5>Com mais de 12 mil apoiantes já reconstruímos centenas de hectares! Tudo graças à nossa maravilhosa equipa.
        </h5>
      </div>
      <div class="col-md-12 d-flex justify-content-center m-section">
        <div class="m-5">
          <img class="volillustration" src="{{asset ('img/limpeza.svg')}}" alt="ilustração de limpeza">
          <h3 class="text-center font-weight-bold">Limpeza</h3>
          <p class="text-center">Fazer limpeza das florestas e reciclar materiais</p>
        </div>
        <div class="m-5">
          <img class="volillustration" src="{{asset ('img/seguranca.svg')}}" alt="ilustração de seguranca">
          <h3 class="text-center font-weight-bold">Segurança</h3>
          <p class="text-center">Manter as florestas fora de perigo de incêndio</p>
        </div>
        <div class="m-5">
          <img class="volillustration" src="{{asset ('img/plantacao.svg')}}" alt="ilustração de plantacao">
          <h3 class="text-center font-weight-bold">Plantação</h3>
          <p class="text-center">Ajudar na reconstrução das florestas e espaços verdes</p>
        </div>
        <div class="m-5">
          <img class="volillustration" src="{{asset ('img/cuidar.svg')}}" alt="ilustração de montanhas">
          <h3 class="text-center font-weight-bold">Cuidar</h3>
          <p class="text-center">Preservar o património florestal</p>
        </div>
      </div>
      <div class="col-md-12 d-flex justify-content-center">
        <a><button class="btn green-btn1">Sobre nós</button></a>
      </div>
    </div>
  </div>
</section>

<div class="suguesectionwrapper">
<section class="container" id="suguesection">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>A nossa comunidade é muita mais do que imaginas</h1>
        <h5>Para chegarmos onde queremos precisamos da tua ajuda, a comunidade é o caminho para o sucesso.
        </h5>
      </div>
      <div class="col-md-12 d-flex justify-content-center hidden2 suguecards">

        <div class="m-5 sugue-box">
          <div class="d-flex">
            <img src="{{asset ('img/users/RicardoOliveira.png')}}" alt="imagem de perfil de utilizador">
            <div>
            <h4>Ricardo Oliveira</h4>
            <p class="text-white">Doador</p>
          </div>
          </div>
          <div>
            <p class="text-justify">
              É um projeto muito ambicioso estou orgulhoso pelo esforço de todos os doadores para esta causa tão importante.
              Obrigado AEPA.
            </p>
          </div>
            <a href=""><span class="more text-white">Saber mais</span></a>
        </div>


        <div class="m-5 sugue-box">
          <div class="d-flex">
            <img src="{{asset ('img/users/LuisaMarques.png')}}" alt="imagem de perfil de utilizador">
            <div>
            <h4>Luísa Marques</h4>
            <p class="text-white">Cliente loja online</p>
          </div>
          </div>
          <div>
            <p class="text-justify">
              Adora os produtos eco sustáveis e a ajuda que tem proporcionado para a reconstrução das florestas é incliver. Os produtos ...
            </p>
          </div>
            <a href=""><span class="more text-white">Saber mais</span></a>
        </div>


        <div class="m-5 sugue-box">
          <div class="d-flex">
            <img src="{{asset ('img/users/JoanaSilva.png')}}" alt="imagem de perfil de utilizador">
            <div>
            <h4>Joana Silva</h4>
            <p class="text-white">Voluntariado</p>
          </div>
          </div>
          <div>
            <p class="text-justify">
              Tem sido um prazer fazer parte desta equipa, a evolução que conseguimos desenvolver nos projetos são simplesmente fantásticos.
            </p>
          </div>
            <a href=""><span class="more text-white">Saber mais</span></a>
        </div>
        </div>
        <h5 class="text-center pb-4">Descobre as vantagens de te tornares membro.
        </h5>
        <div class="col-md-12 d-flex justify-content-center">
          
        <a class="link-light" href="{{route('tornarMembro')}}"><button class="btn green-btn1">Tornar membro</button></a>
        <a><button class="btn hero-btn2">Sugestões</button></a>
      </div>
      </div>
    </div>
  </section>
  </div>

</main><!-- End #main -->


@endsection
