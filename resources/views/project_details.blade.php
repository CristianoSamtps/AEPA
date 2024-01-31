@extends('layouts.master')

@section('title', 'Projeto')

@section('styles')
    <link href="{{ asset('/css/project_details.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('main')

    <!-- Área de Carregamento Inicial -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <!-- Seção de detalhes do projeto -->
    <section id="project-details" class="container">
        <div class="row">
            <div class="col-lg-8">

                <!-- Título do Projeto e Estado -->
                <h2>{{ $projeto->titulo }}
                    <span class="state-badge">
                        @if ($projeto->estado == 'concluido')
                            <span class="badge badge-success">Concluído</span>
                        @elseif ($projeto->estado == 'em andamento')
                            <span class="badge badge-warning">Em Andamento</span>
                        @elseif ($projeto->estado == 'cancelado')
                            <span class="badge badge-danger">Cancelado</span>
                        @elseif ($projeto->estado == 'indisponivel')
                            <span class="badge badge-dark">Indisponível</span>
                        @endif
                    </span>
                </h2>

                <!-- Descrição do Projeto -->
                <p>{{ $projeto->descricao }}</p>

                <!-- Galeria de Imagens do Projeto -->
                <div class="project-gallery">
                    <h3>Galeria de Imagens</h3>
                    @if (count($projeto->fotografias) > 0)
                        <div class="row">
                            @foreach ($projeto->fotografias as $foto)
                                <div class="col-md-6">
                                    <img src="{{ asset('storage/project_photos/' . $foto->foto) }}" alt="Fotografia">
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>Sem fotografias disponíveis.</p>
                    @endif
                </div>

                <!-- Parcerias do Projeto -->
                @if (count($projeto->partnerships) > 0)
                    <h3>Conheça as parcerias deste projeto</h3>
                    <div class="project-partners">
                        @foreach ($projeto->partnerships as $foto)
                            <img src="{{ asset('storage/partner_fotos/' . $foto->foto) }}" alt="Fotografia">
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="col-lg-4">
                <!-- Informações Adicionais do Projeto -->
                <div class="project-info">
                    <h3>Detalhes Adicionais</h3>

                    <!-- Barra de Progresso de Doações -->
                    <div class="donation-bar-container">
                        <div class="progress-bar-container">
                            <div class="progress-bar over-100"
                                style="width: {{ ($valorArrecadado / $projeto->objetivos) * 100 }}%;">
                                <span
                                    class="progress-text">{{ round(($valorArrecadado / $projeto->objetivos) * 100) }}%</span>
                            </div>
                        </div>
                        <div class="donation-info">
                            <div class="left-info">
                                <strong>Valor Doado:</strong><br>
                                {{ $valorArrecadado }}€
                            </div>
                            <div class="right-info">
                                <strong>Objetivo Financiamento:</strong><br>
                                {{ $projeto->objetivos }}€
                            </div>
                        </div>
                    </div>
                    <br>

                    <!-- Data Final do Projeto -->
                    <strong>Data Final:</strong>
                    {{ \Carbon\Carbon::parse($projeto->data_final)->format('d \d\e F \d\e Y') }}
                </div>
                <br>

                <!-- Secção Como Contribuir -->
                <strong>Como contribuir:</strong>
                <div class="grid-container">
                    <a href="{{ route('doacoes') }}" class="grid-item">Doações</a>
                    <a href="{{ route('inscricao', ['projeto_id' => $projeto->id]) }}" class="grid-item">Voluntariado</a>
                    <a href="{{ route('eventos') }}" class="grid-item">Eventos</a>
                    <a href="{{ route('patrocinadores') }}" class="grid-item">Parcerias</a>
                    <a href="https://www.instagram.com/aepa_portugal/" class="grid-item">Compartilhar</a>
                    <a href="https://wordpress.g1.dwm2023.fun/" class="grid-item">Loja AEPA</a>
                </div>

                <br>
                <!-- Doações por Projeto -->
                @if (count($doadores) > 0)
                    <h2>Doações do Projeto</h2>
                    @foreach ($doadores as $doador)
                        <div class="d-flex flex-row comment-row m-t-0">
                            <div class="p-2">
                                <img src="/storage/user_fotos/default_user.jpg" alt="user" width="50"
                                    class="rounded-circle">
                            </div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium">
                                    {{ $doador['doador'] }}</h6>
                                <span class="m-b-15 d-block">{{ $doador['mensagem'] }}</span>
                                <div class="comment-footer">
                                    <span class="text-muted float-right">{{ $doador['data'] }}</span>
                                    <button type="button" disabled=""
                                        class="btn btn-success">{{ $doador['valor'] }}€</button>
                                </div>
                                <br>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- Ficheiros JavaScript !-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/projects.js') }}"></script>

@endsection
