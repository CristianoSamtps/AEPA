@extends('layouts.master')

@section('title', 'AEPA')


@section('styles')
    <link href="{{ asset('/css/styleG.css') }}" rel="stylesheet">
@endsection

@section('main')

    <main id="main">
        <section class="sugestoes">
            <div class="container-sugestoes">
                <div class="titulo">
                    <h2>Sugestões</h2>
                </div>
                <div class="filtros">
                    <div class="search-box">
                        <input type="text" placeholder="Pesquisar...">
                        <a href="">
                            <img src="{{ asset('img/lupa.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="donates">
                    @foreach ($sugestoes as $sugestao)
                    <div class="card">
                        <img src="{{ asset('img/ana.jpg') }}" alt="" class="profile-image">
                        <h6 class="profile-name">{{$sugestao->member_doner_id}}</h6>
                        <h2 class="name">{{$sugestao->sugestao}}</h2>
                        <button class="btn"><img src="{{ asset('img/logo_black.svg') }}"> {{$sugestao->votos}}</button>
                    </div>
                    @endforeach

                </div>

        </section>
    </main>

@endsection
