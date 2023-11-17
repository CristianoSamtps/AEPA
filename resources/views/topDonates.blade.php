@extends('layouts.master')

@section('title', 'AEPA')


@section ('styles')
<link href="{{ asset ('/css/styleG.css') }}" rel="stylesheet">
@endsection

@section('main')

<main id="main"> 
  <section class="top-donates">
  <div class="titulo">
        <h2>Top donates</h2>
    </div>
    <div class="filtros">
        <div class="input-group mb-3" id="box">
            <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Recipient's username" aria-describedby="button-addon2">
        </div>
        <span class="switch">
            <input type="checkbox" name="" id="switcher">
            <label for="switcher"></label>
        </span>
    </div>
    
    <div class="donates">
        <div class="card">
            <img src="img/ana.jpg" alt="" class="profile-image">
            <h2 class="name">Joana Bastos</h2>
            <button class="btn">1361€</button>
        </div>
        <div class="card">
            <img src="img/ana.jpg" alt="" class="profile-image">
            <h2 class="name">Joel Loureiro</h2>
            <button class="btn">1361€</button>
        </div>
        <div class="card">
            <img src="img/ana.jpg" alt="" class="profile-image">
            <h2 class="name">Joel Loureiro</h2>
            <button class="btn">1361€</button>
        </div>
        <div class="card">
            <img src="img/ana.jpg" alt="" class="profile-image">
            <h2 class="name">Joel Loureiro</h2>
            <button class="btn">1361€</button>
        </div
    </div>  

</section>


</main>

@endsection