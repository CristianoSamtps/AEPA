@extends('layouts.master')

@section('title', 'AEPA')


@section('styles')
    <link href="{{ asset('/css/styleG.css') }}" rel="stylesheet">
@endsection

@section('main')

    <main id="main">
        <section class="detalhesDoacao">

            <div class="bannerD">
                <img src="{{ asset('img/praia.svg') }}" alt="">
            </div>
            <div class="card">
                <div class="titulo">
                    <h4>{{ $projeto->titulo }}</h4>
                </div>
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
            <div class="content">
                <h4>Descrição</h4>
                <p>{{ $projeto->descricao }}</p>
                <button>
                    <h4>Doar agora</h4>
                </button>
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

                <div class="paginas">
                    <ul>
                        <li class="link" value="1">1</li>
                        <li class="link" value="2">2</li>
                        <li class="link" value="3">3</li>
                    </ul>
                </div>
    -->
            </div>
            </div>
        </section>
    </main>

@endsection
