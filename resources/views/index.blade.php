@extends('layouts.master')

@section('title', 'AEPA')

@section('main')

<main id="main"> 
  <section class="container" id="indexHero">

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Já conheces a missão da nossa associação AEPA?</h1>
          <h5>Com mais de 14 mil apoiantes já reconstruímos centenas de hectares! Tudo graças à nossa maravilhosa equipa.
          </h5>
          <a><button class="btn hero-btn1">Associação</button></a>
          <a><button class="btn hero-btn2">Doações</button></a>
        </div>
        <div class="col-md-6">
          <div id="herosvg">
          <img src="{{asset ('img/heroanimation.svg')}}" alt="index_animation">
          </defs>
        </svg>
      </div>
    </div>
  </div>
</div>

</section>
<!-- End #hero -->

<!-- Start #content -->
<div class="indexContentwrapper">
<section class="container" id="indexContent">
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
</main><!-- End #main -->

@endsection