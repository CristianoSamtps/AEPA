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
                    <li>Projetos</li>
                    <li>Doações</li>
                    <li>Perfil</li>
                    <li>Comunidade</li>
                    <li>Configurações</li>
                    <li>Sair</li>
                </ul>
            </div>

            <div id="main-content">

                <div class="col-3" id="profile-summary">

                    <!-- Primeira secção do perfil -->
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
                    <!-- Área dos Projetos -->
                    <h2>Projetos</h2>
                    <p>Aqui são listados os principais projetos associados ao utilizador.</p>
                </div>
                <div id="donations">
                    <!-- Secção de Últimas Doações -->
                    <h2>Últimas Doações</h2>
                    <p>Aqui são apresentadas as informações relacionadas às últimas doações efetuadas pelo utilizador.</p>
                </div>
            </div>
        </div>

    </main>


@endsection
