@extends('layouts.master')

@section('title', 'AEPA')


@section('styles')
    <link href="{{ asset('/css/styleG.css') }}" rel="stylesheet">
@endsection

@section('main')

    <main id="main">
        <section class="doacoes">
            <div class="container-doacoes">
                <div class="titulo">
                    <h2>Doações</h2>
                </div>
                <div class="banner">
                    <div class="text">
                        <p>Com a sua ajuda podemos concretizar os nossos projetos e ajudar a nossa casa que é a Terra</p>
                        <a href="{{ route('topDonates') }}">Ver os tops donates</a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('img/banner-doacoes.svg') }}" alt="">
                    </div>
                </div>

                <div class="filtros">
                    <div class="search-box">
                        <img src="{{ asset('img/lupa.svg') }}" alt="">
                        <input type="text" placeholder="Pesquisar doação aqui">
                    </div>
                    <div class="botoes">
                        <label id="all">All</label>
                        <label id="localidade">Localidade</label>
                        <label id="doacoes">Doações</label>
                    </div>
                    @foreach ($projetos as $projeto)
                        <div class="card">

                            <div class="esq">
                                <img src="{{ asset('img/praia.svg') }}" alt="">
                            </div>
                            <div class="dir">
                                <h4>{{ $projeto->titulo }}</h4>
                                <div class="bar">
                                    <div class="per"
                                        style="max-width:{{ ($projeto->donations()->sum('valor') * 100) / $projeto->objetivos }}%">
                                    </div>
                                    <div class="texto-per">
                                        <span>{{ $projeto->donations()->sum('valor') }}€ <span
                                                id="cinza">angariados<span> </span>
                                                <span id="cinza"
                                                    class="perc">{{ ($projeto->donations()->sum('valor') * 100) / $projeto->objetivos }}%</span>
                                    </div>
                                </div>
                            </div>


                        </div>
                    @endforeach
                    @foreach ($doacoes as $doacao)
                        <div class="card">

                            <div class="esq">
                                <img src="{{ asset('img/praia.svg') }}" alt="">
                            </div>
                            <div class="dir">
                                <h4>{{ $doacao->title }}</h4>
                                <div class="bar">
                                    <div class="per"></div>
                                    <div class="texto-per">
                                        <span>{{ $doacao->valor }}€ <span id="cinza">angariados<span> </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            <!--
                <div class="card">
                    <div class="esq">
                        <img src="{{ asset('img/praia.svg') }}" alt="">
                    </div>
                    <div class="dir">
                        <h4>Plantação da mata de Leiria</h4>
                        <div class="bar">
                            <div class="per"></div>
                            <div class="texto-per">
                                <span>100 € <span id="cinza">angariados<span> </span>
                                        <span id="cinza" class="perc">20%</span>
                            </div>

                        </div>

                    </div>
                </div>
             -->
            <div class="paginas">
                <ul>
                    <li class="link" value="1">1</li>
                    <li class="link" value="2">2</li>
                    <li class="link" value="3">3</li>
                </ul>
            </div>
            </div>
            </div>
        </section>
    </main>

@endsection
