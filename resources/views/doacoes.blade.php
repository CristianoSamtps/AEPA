@extends('layouts.master')

@section('title', 'AEPA')


@section('styles')
    <link href="{{ asset('/css/styleG.css') }}" rel="stylesheet">
@endsection

@section('main')

    <main id="main">
        <section class="doacoes">
            <div class="titulo">
                <h2>Doações</h2>
            </div>
            <div class="banner">
                <div class="text">
                    <p>Com a sua ajuda podemos concretizar os nossos projetos e ajudar a nossa casa que é a Terra</p>
                </div>
                <div class="image">
                    <img src="{{ asset('img/banner-doacoes.svg') }}" alt="">
                </div>
            </div>
            <div class="filtros">
                <div class="search-box">
                        <img src="{{ asset('img/lupa.svg')}}" alt="">
                    <input type="text" placeholder="Pesquisar doação aqui">
                </div>
                <div class="botoes">
                    <label id="all">All</label>
                    <label id="localidade">Localidade</label>
                        <ul id="locals">
                            <li>Leiria</li>
                            <li>Marinha-Grande</li>
                        </ul>
                    <label id="doacoes">Doações</label>
                </div>
            </div>
        </section>
    </main>

@endsection
