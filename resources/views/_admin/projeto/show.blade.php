@extends('layouts.admin')

@section('title')
    Informação do Projeto
@endsection

@section('backoffice-content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Título:</strong> {{ $projeto->titulo }}
                            @if ($projeto->estado == 'concluido')
                                <span class="badge badge-success">Concluído</span>
                            @elseif ($projeto->estado == 'em andamento')
                                <span class="badge badge-warning">Em Andamento</span>
                            @elseif ($projeto->estado == 'cancelado')
                                <span class="badge badge-danger">Cancelado</span>
                            @elseif ($projeto->estado == 'indisponivel')
                                <span class="badge badge-dark">Indisponível</span>
                            @endif
                        </p>
                        <p><strong>Subtítulo:</strong> {{ $projeto->subtitulo }}</p>
                        <p><strong>Descrição:</strong> {{ $projeto->descricao }}</p>
                        <p><strong>Localidade:</strong> {{ $projeto->localidade }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Data Inicial:</strong>
                            {{ \Carbon\Carbon::parse($projeto->created_at)->format('d \d\e F \d\e Y') }}
                        </p>
                        <p><strong>Data Final:</strong>
                            {{ \Carbon\Carbon::parse($projeto->data_final)->format('d \d\e F \d\e Y') }}</p>
                        <p><strong>Objetivo de Financiamento:</strong> {{ $projeto->objetivos }}€</p>
                        <p><strong>Voluntariado:</strong>
                            @if ($projeto->voluntariado == 1)
                                <span class="badge badge-success">Sim</span>
                            @else
                                <span class="badge badge-danger">Não</span>
                            @endif
                        </p>
                        <p><strong>Parceiros:</strong></p>
                        @foreach ($projeto->partnerships as $foto)
                            <img src="{{ asset('storage/partner_fotos/' . $foto->foto) }}" width="100px" alt="Fotografia"
                                class="mr-2">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.projeto.index') }}" class="btn btn-primary">Voltar</a>
    </div>
@endsection
