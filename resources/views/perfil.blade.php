@extends('layouts.master')

@section('title', 'AEPA')

@section('styles')
    <link href="{{ asset('/css/perfil.css') }}" rel="stylesheet">
@endsection

@section('main')


    <main id="main">

        <div id="container">

            <div id="sidebar">
                <ul>
                    <li>
                        <div class="icon-container">
                            <img class="icon" src="{{ asset('img/Ícones/icon projetos.svg') }}" alt="Projetos">
                        </div>
                        <p>Projetos</p>
                    </li>
                    <li>
                        <div class="icon-container">
                            <img class="icon" src="{{ asset('img/Ícones/icon doacoes.svg') }}" alt="Doações">
                        </div>
                        <p>Doações</p>
                    </li>
                    <li>
                        <div class="icon-container">
                            <img class="icon" src="{{ asset('img/Ícones/icon projetos.svg') }}" alt="Perfil">
                        </div>
                        <p>Perfil</p>
                    </li>
                    <li>
                        <div class="icon-container">
                            <img class="icon" src="{{ asset('img/Ícones/icon comunidade.svg') }}" alt="Comunidade">
                        </div>
                        <p>Comunidade</p>
                    </li>
                    <li>
                        <div class="icon-container">
                            <img class="icon" src="{{ asset('img/Ícones/icon settings.svg') }}" alt="Configurações">
                        </div>
                        <p>Configurações</p>
                    </li>
                    <li>
                        <div class="icon-container">
                            <img class="icon" src="{{ asset('img/Ícones/icon logout.svg') }}" alt="Sair">
                        </div>
                        <p>Sair</p>
                    </li>
                </ul>
            </div>

            <div id="main-content">

                <div class="container-fluid">

                    <div class="row">
                        <!-- Coluna à esquerda -->
                        <div id="profileresume" class="col-4">
                            <div class="imagemperfil">
                            </div>
                            <h2>Nome do Utilizador</h2>

                            <p>Doador</p>

                            <button>Torne-se Membro</button>

                            <div class="caixa-detalhes">
                                <span>Email</span>
                                <p>exemplo@dominio.com</p></span>
                            </div>

                            <div class="caixa-detalhes">
                                <span>Número de Telemóvel</span>
                                <p>+351 123 456 789</p>
                            </div>

                            <div class="caixa-detalhes">
                                <span>Género</span>
                                <p>Masculino</p>
                            </div>
                        </div>

                        <!-- Colunas à direita -->
                        <div class="col-8">
                            <!-- Subdivisão superior em 3 colunas -->
                            <div class="row">
                                <div id="exprojeto" class="col-4">
                                    <!-- Conteúdo da coluna superior esquerda -->
                                </div>
                                <div id="exprojeto" class="col-4">
                                    <!-- Conteúdo da coluna superior central -->
                                </div>
                                <div id="exprojeto" class="col-4">
                                    <!-- Conteúdo da coluna superior direita -->
                                </div>
                            </div>

                            <!-- Coluna inferior preenchendo todo o espaço -->
                            <div class="row">
                                <div id="resumedoacoes" class="col-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

    </main>
    <section class="background2">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1439 621" fill="none">
            <path
                d="M160 91C81 71.5 -1 0 -1 0V279.5C-1 279.5 88.5 384.5 180 384.5C271.5 384.5 367 283 496 337.5C625 392 775 597 967.5 543C1160 489 1217 471.5 1305 489.5C1393 507.5 1439 620.5 1439 620.5V384.5C1439 384.5 1454 275.5 1318.5 211.5C1183 147.5 1022.5 275 917.5 266C812.5 257 632 74 511.5 48.5C391 23 239 110.5 160 91Z"
                fill="url(#paint0_linear_15_69)" fill-opacity="0.29" />
            <defs>
                <linearGradient id="paint0_linear_15_69" x1="719.246" y1="0" x2="719.246" y2="620.5"
                    gradientUnits="userSpaceOnUse">
                    <stop offset="0.0625" stop-color="#4FCD8B" />
                    <stop offset="0.651042" stop-color="#11492B" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>

    </section>


@endsection
<!--<div class="col-3" id="profile-summary">

                        Primeira secção do perfil
                        <img src="caminho/para/imagem-de-perfil.jpg" alt="Imagem de Perfil">

                        <h2>Nome do Utilizador</h2>

                        <p>Doador</p>

                        <button>Torne-se Membro</button>

                        <div class="caixa-detalhes">
                            <span>Email</span>
                            <p>exemplo@dominio.com</p></span>
                        </div>

                        <div class="caixa-detalhes">
                            <span>Número de Telemóvel</span>
                            <p>+351 123 456 789</p>
                        </div>

                        <div class="caixa-detalhes">
                            <span>Género</span>
                            <p>Masculino</p>
                        </div>

                    </div>


                    <div lass="col-3"id="projects">

                        <h2>Projetos</h2>
                        <p>Aqui são listados os principais projetos associados ao utilizador.</p>
                    </div>
                    <div id="donations">
                        <h2>Últimas Doações</h2>
                        <p>Aqui são apresentadas as informações relacionadas às últimas doações efetuadas pelo utilizador.</p>
                    </div>
                </div>-->
