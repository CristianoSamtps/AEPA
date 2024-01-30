@extends('layouts.master')

@section('title', 'Projeto')

@section('styles')
    <link href="{{ asset('/css/project_details.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
@endsection

@section('main')
    <section id="project-details" class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>{{ $projeto->titulo }} <span class="state-badge">{{ $projeto->estado }}</span></h2>
                <p>{{ $projeto->descricao }}</p>

                <!-- Galeria de Imagens do Projeto -->
                <div class="project-gallery">
                    <h3>Galeria de Imagens</h3>
                    @if (count($projeto->fotografias) > 0)
                        <div class="row">
                            @foreach ($projeto->fotografias as $foto)
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/project_photos/' . $foto->foto) }}" alt="Fotografia">
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>Sem fotografias disponíveis.</p>
                    @endif
                </div>

                @if (count($projeto->partnerships) > 0)
                    <h3>Conheça as parcerias deste projeto</h3>
                    <div class="project-partners">
                        @foreach ($projeto->partnerships as $partner)
                            {{ $partner->name }}
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="col-lg-4">
                <!-- Informações Adicionais do Projeto -->
                <div class="project-info">
                    <h3>Detalhes Adicionais</h3>
                    <ul>
                        <li><strong>Objetivo de Financiamento: </strong>{{ $projeto->objetivos }}€</li>
                        <li><strong>Valor Atualmente Arrecadado:</strong>{{ $valorArrecadado }}€</li>
                        <li><strong>Data de Expiração:</strong>{{ $projeto->data_final }}</li>
                        <!-- Adicione mais detalhes conforme necessário -->
                    </ul>
                </div>

                <div>
                    <h3>Como contribuir</h3>
                    <ul>
                        <li>Doações</li>
                        <li>Voluntariado</li>
                        <li>Eventos</li>
                        <li>Parcerias</li>
                        <li>Compartilhar</li>
                        <li>Loja AEPA</li>
                    </ul>
                </div>

                <!-- Doações por Projeto -->
                @if (count($doadores) > 0)
                    <div>
                        <h2>Doadores do Projeto</h2>
                        @foreach ($doadores as $doador)
                            <div>
                                <strong>Doador:</strong> {{ $doador['doador'] }}<br>
                                <strong>Valor doado:</strong> {{ $doador['valor'] }}€<br>
                                <strong>Mensagem:</strong> {{ $doador['mensagem'] }}<br>
                                <strong>Data:</strong> {{ $doador['data'] }}<br>
                                <hr>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
