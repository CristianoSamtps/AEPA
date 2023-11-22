@extends('layouts.master')

@section('title', 'Detalhes do Projeto')

@section('styles')
<link href="{{ asset('/css/project_detail1.css') }}" rel="stylesheet">
@endsection

@section('main')
    <div class="project-details">
        <div class="project-status">
            <!-- Estado do Projeto -->
            <h3>Estado do Projeto: Em Andamento</h3>
        </div>

        <div class="project-goal">
            <!-- Objetivo Financeiro (€) e Data de Expiração -->
            <h3>Objetivo Financeiro: €10,000</h3>
            <p>Data de Expiração: 31 de dezembro de 2023</p>
        </div>

        <div class="project-description">
            <!-- Descrição Completa do Projeto -->
            <h2>Nome do Projeto</h2>
            <p>Descrição detalhada do projeto. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...<br>
                Como o projeto começou? Qual é a sua origem e motivação? Impacto Esperado<br>
                Quais são os desafios que o projeto enfrenta? Como a equipe está abordando esses desafios?<br>
                Se o projeto já estiver em andamento, quais são alguns dos resultados alcançados até agora? <br>
            </p>
        </div>

        <div class="project-partnerships">
            <!-- Parcerias Estratégicas -->
            <h2>Parcerias Estratégicas</h2>
            <ul>
                <li>Parceiro 1</li>
                <li>Parceiro 2</li>
            </ul>
        </div>

        <div class="project-gallery">
            <!-- Galeria de Imagens -->
            <h2>Galeria de Imagens</h2>
            <img src="{{ asset('img/Cidades/Verdejante.jpg') }}" alt="Verdejante">
            <img src="{{ asset('img/Cidades/Rios Limpos.jpg') }}" alt="Verdejante">
        </div>

        <div class="project-community-feedback">
            <!-- Feedback da Comunidade -->
            <h2>Feedback da Comunidade</h2>
            <p>"O projeto fez uma grande diferença em nossas vidas..."</p>
        </div>

        <div class="project-how-to-contribute">
            <!-- Como Contribuir -->
            <h2>Como Contribuir</h2>
            <p>Contribua doando fundos, participando como voluntário, etc.</p>
        </div>

        <div class="project-related-events">
            <!-- Eventos Relacionados -->
            <h2>Eventos Relacionados</h2>
            <p>Não há eventos programados no momento.</p>
        </div>

        <div class="project-achievements">
            <!-- Resultados Alcançados -->
            <h2>Resultados Alcançados</h2>
            <p>O projeto já alcançou X, Y, Z...</p>
        </div>

        <div class="project-team">
            <!-- Equipe do Projeto -->
            <h2>Equipe do Projeto</h2>
            <ul>
                <li>Nome do Membro 1 - Função</li>
                <li>Nome do Membro 2 - Função</li>
            </ul>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Adicione os scripts específicos desta página, se necessário -->
@endsection
