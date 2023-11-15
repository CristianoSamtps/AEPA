@extends('layouts.master')

@section('title', 'AEPA')

@section('main')

<main id="main"> 
  <section class="top-donates" >
  <div class="titulo">
        <h2>Top donates</h2>
    </div>
    <div class="filtros">
        <div class="box">
            <input type="text" placeholder="Pesquisar" class="Pesquisar">            
        </div>

    </div>

    <div class="donates">
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