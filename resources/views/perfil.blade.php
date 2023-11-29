@extends('layouts.master')

@section('title', 'AEPA')

@section ('styles')
<link href="{{ asset ('/css/perfil.css') }}" rel="stylesheet">
@endsection

@section('main')


<main id="main">

    <div id="container">
        <div id="sidebar">
            <ul>
                <li>Projetos</li>
                <li>Doações</li>
                <li>Perfil (onde me encontro atualmente)</li>
                <li>Comunidade</li>
                <li>Configurações</li>
                <li>Sair</li>
            </ul>
        </div>
        <div id="main-content">
            <div id="profile-summary">
                <!-- Primeira secção do perfil -->
                <img src="caminho/para/imagem-de-perfil.jpg" alt="Imagem de Perfil">
                <h2>Nome do Utilizador</h2>
                <p>Doador</p>
                <button>Torne-se Membro</button>
            </div>
            <div id="user-details">
                <!-- Segunda secção do perfil -->
                <p>Email: exemplo@dominio.com</p>
                <p>Número de Telemóvel: +351 123 456 789</p>
                <p>Género: Masculino</p>
            </div>
            <div id="projects">
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
    
<div class="col-md-9 p-4">
    <div class="row">
        <!-- Primeira secção do perfil -->
        <div class="col-md-4">
            <img src="caminho/para/imagem-de-perfil.jpg" alt="Imagem de Perfil" class="img-fluid mb-3">
            <h2>Nome do Utilizador</h2>
            <p>Doador</p>
            <button class="btn btn-primary mb-3">Torne-se Membro</button>
        </div>
        <!-- Segunda secção do perfil -->
        <div class="col-md-8">
            <h2>Detalhes do Utilizador</h2>
            <form>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" value="exemplo@dominio.com" readonly>
                </div>
                <div class="form-group">
                    <label for="telefone">Número de Telemóvel:</label>
                    <input type="text" class="form-control" id="telefone" value="+351 123 456 789" readonly>
                </div>
                <div class="form-group">
                    <label for="genero">Género:</label>
                    <input type="text" class="form-control" id="genero" value="Masculino" readonly>
                </div>
            </form>
            <!-- Área dos Projetos -->
            <div class="mt-4">
                <h2>Projetos</h2>
                <p>Aqui são listados os principais projetos associados ao utilizador.</p>
            </div>
            <!-- Secção de Últimas Doações -->
            <div class="mt-4">
                <h2>Últimas Doações</h2>
                <p>Aqui são apresentadas as informações relacionadas às últimas doações efetuadas pelo utilizador.</p>
            </div>
        </div>
    </div>
</div>
</main>


@endsection
