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
              <p class="sobreCardsInfor">Reconstruir o ambiente ao nosso redor e manter as florestas limpas</p>
            </div>
            <div id="card-box">
              <h4>5000 
                produtos
              reciclados</h4>
              <p class="sobreCardsInfor">Reconstruir o ambiente ao nosso redor e manter as florestas limpas</p>
            </div>
            <div id="card-box">
              <h4>+3000 
                voluntários
              anuais</h4>
              <p class="sobreCardsInfor">Reconstruir o ambiente ao nosso redor e manter as florestas limpas</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 text-center">
          <div id="herosvg">
            <object data="{{asset ('img/TakingcareoftheEarth.svg')}}" type="image/svg+xml"></object>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End #hero -->

  <!-- Proteção ambietal-->

  <section class="container" id="protecaoAmbiental">
    <div class="row">
      <div class="col-md-6">
        <div class="protecaoProj" id="protecaoProjIdent1">
          <h5>Caranguejeira<span>2022</span></h5>
        </div>
        <div class="protecaoProj" id="protecaoProjIdent2">
          <h5>Pedrógão grande<span>2019</span></h5>
        </div>
        <div class="protecaoProj" id="protecaoProjIdent3">
          <h5>Pinhal de Leiria<span>2016</span></h5>
        </div>
      </div>
      <div class="col-md-6 " id="protecaoAmbientalinfo">
        <span>Atualizado a 12-11-2023</span>
        <h1>História e Missão</h1>
        <h4>Juntos pela Natureza, a AEPA trilha caminhos de preservação e sustentabilidade. Somos uma comunidade comprometida com a projeção do ambiente.
        </h4>
      </div>
    </div>
  </div>
</section>

<!-- End Proteção ambietal-->

<!-- Impacto social -->

<section class="container" id="impactosocial">
  <div class="row">
    <div class="col-md-6" id="impactosocialinfo">
      <h1>Impacto social</h1>
      <h4 id="infoinfo">
        Na AEPA, não só plantamos árvores como cultivamos um impacto social duradouro. Cada ação nossa ecoa na comunidade, promovendo consciência ambiental e transformando vidas.
      </h4>
    </div>
    <div class="col-md-6 text-center">
      <object data="{{asset ('img/impacto_social.svg')}}" type="image/svg+xml"></object>
    </div>
  </div>
</section>

<!-- End Impacto social -->

<section class="container">
  <div class="row">
    <div class="col-md-6">
    </div>
    <div class="col-md-6">

      <div class="accordion" id="accordionExample">

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Onde são utilizados os fundos das doações?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Como é que posso participar num evento? 
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Os eventos são gratuitos?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Como me posso voluntariar?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Para aceder ao processo de voluntariado pode dirigir-se a página do projeto ao qual se pretende voluntariar, e ai participar no projeto.

              Todas a informações necessárias poderão ser encontradas na página principal do projeto.

              Em caso de dúvidas contacte 962145236 ou em projetosaepa@aepa.pt

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  
</section>


</main><!-- End #main -->


@endsection
