@extends('layouts.master')

@section('title', 'AEPA')


@section('styles')
    <link href="{{ asset('/css/styleG.css') }}" rel="stylesheet">
@endsection

@section('main')

    <main id="main">
        <section class="doacoes">
            <div class="container-doacoes">
                @if (!empty(session('success')))
                    @include ('layouts.partials.success_master')
                @endif
                <div class="titulo">
                    <h2>Doações</h2>
                </div>
                <div class="banner">
                    <div class="text">
                        <p>Com a sua ajuda podemos concretizar os nossos projetos e ajudar a nossa casa que é a Terra</p>
                        <a href="{{ route('topDonates') }}">Ver os tops donates</a>
                        @auth
                    <button>
                        <a href="#" onclick="openModal()">
                            <h4>Doar agora</h4>
                        </a>
                    </button>
                @else
                    <p>É necessário fazer login para doar. <a href="{{ route('login') }}" id="clique">Clique aqui</a> para
                        fazer login.</p>

                @endauth
                    </div>

                    <div class="image">
                        <img src="{{ asset('img/banner-doacoes.svg') }}" alt="">
                    </div>
                </div>
                <div class="filtros">
                    {{-- <div class="search-box">
                        <img src="{{ asset('img/lupa.svg') }}" alt="">
                        <input type="text" placeholder="Pesquisar doação aqui">
                    </div> --}}
                    {{-- <div class="botoes">
                        <label id="all">All</label>
                        <label id="localidade">Localidade</label>
                        <label id="doacoes">Doações</label>
                    </div> --}}


                @foreach ($projetos as $proj)
                    <a href="{{ route('detalhesDoacoes', ['projeto' => $proj]) }}">
                        <div class="card">
                            <div class="esq">
                                <img src="{{ asset('img/praia.svg') }}" alt="">
                            </div>
                            <div class="dir">
                                <h4>{{ $proj->titulo }}</h4>
                                <div class="bar">
                                    <div class="per"
                                        style="max-width:{{ ($proj->donations()->sum('valor') * 100) / $proj->objetivos }}%">
                                    </div>
                                    <div class="texto-per">
                                        <span>{{ $proj->donations()->sum('valor') }}€ <span
                                                id="cinza">angariados<span> </span>
                                                <span id="cinza"
                                                    class="perc">{{ ($proj->donations()->sum('valor') * 100) / $proj->objetivos }}%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
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
    @include('modal_doacao')

@endsection

@section('moreScripts')


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        @if (count($errors))
            openModal();
            showFields();
        @endif
        function openModal() {
            $("#modal-container").fadeIn();
        }

        function closeModal() {
            $("#modal-container").fadeOut();
        }

        function showFields() {
            var metodoPagamento = document.getElementById("metodo_pagamento").value;

            // Oculta todos os campos específicos
            document.getElementById("C_fields").style.display = "none";
            document.getElementById("referencia_multibanco_fields").style.display = "none";
            document.getElementById("mbway_fields").style.display = "none";

            // Exibe os campos específicos do método de pagamento selecionado
            if (metodoPagamento === "C") {
                document.getElementById("C_fields").style.display = "block";
            } else if (metodoPagamento === "R") {
                document.getElementById("referencia_multibanco_fields").style.display = "block";
            } else if (metodoPagamento === "M") {
                document.getElementById("mbway_fields").style.display = "block";
            }
        }
    </script>
@endsection

