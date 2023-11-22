@extends('layouts.master')

@section('title', 'Detalhes do Projeto')

@section('styles')
    <link href="{{ asset('/css/project_detail2.css') }}" rel="stylesheet">
@endsection

@section('main')
    <section id="project-details" class="container">
        <div class="row">
            <div class="col-lg-8">
                <img src="{{asset('img/Ícones')}}"
                <h2>Nome do Projeto <span class="state-badge">Concluido</span></h2>
                <p>Descrição detalhada do projeto. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...<br>
                    Como o projeto começou? Qual é a sua origem e motivação? Impacto Esperado<br>
                    Quais são os desafios que o projeto enfrenta? Como a equipe está abordando esses desafios?<br>
                    Se o projeto já estiver em andamento, quais são alguns dos resultados alcançados até agora? <br>
                </p>

                <!-- Parcerias -->
                <div class="project-partners">
                    <h3>Parcerias</h3>
                    <p>Lista de parceiros envolvidos no projeto.</p>
                </div>

                <!-- Galeria de Imagens do Projeto -->
                <div class="project-gallery">
                    <img src="{{ asset('img/Cidades/Verdejante.jpg') }}" alt="Verdejante">
                    <img src="{{ asset('img/Cidades/Rios Limpos.jpg') }}" alt="Verdejante">
                </div>


            </div>

            <div class="col-lg-4">
                <!-- Informações Adicionais do Projeto -->
                <div class="project-info">
                    <h3>Detalhes Adicionais</h3>
                    <ul>
                        <li><strong>Objetivo de Financiamento:</strong> €100,000</li>
                        <li><strong>Valor Atualmente Arrecadado:</strong> €50,000</li>
                        <li><strong>Data de Expiração:</strong> 31 de Dezembro de 2023</li>
                        <!-- Adicione mais detalhes conforme necessário -->
                    </ul>
                </div>

                <!-- Doações por Projeto -->
                <div class="project-donations">
                    <h3>Doações por Projeto</h3>
                    <p>Lista de doações recebidas até o momento.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Adicione scripts específicos para esta página, se necessário -->
@endsection
