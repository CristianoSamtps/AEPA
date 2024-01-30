@extends('layouts.master')

@section('title', 'AEPA | Projetos')

@section('styles')
    <link href="{{ asset('/css/projects.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
@endsection

@section('main')
    <div class="projects-section">

        <!-- Título "Projetos" -->
        <h1 id="projects-title">Projetos</h1>
        <button class="volunt"><a href="{{ route('voluntariado') }}">Ver Projetos para Voluntariar</a></button>

        <!-- Listagem de Projetos -->
        <div class="projects-list">

            <div class="project-row project-row-1">
                @if ($projetos->isEmpty())
                    <p>De momento não temos projetos registados, iremos ter brevemente.</p>
                @else
                    @foreach ($projetos as $projeto)
                            <div class="project">
                                <a href="{{ route('project_details', ['projeto' => $projeto]) }}">
                                <h3>{{ $projeto->localidade }}</h3>
                                @foreach ($fotografias as $fotografia)
                                    @if ($fotografia->projeto_id === $projeto->id)
                                        <img src="{{ asset('storage/project_photos/' . $fotografia->foto) }}"
                                            alt="{{ $projeto->titulo }}">
                                    @break
                                @endif
                            @endforeach
                            <h2>{{ $projeto->titulo }}</h2>
                            <p>{{ $projeto->subtitulo }}</p>
                        </a>
                        </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

<!-- Ficheiros JavaScript !-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/projects.js') }}"></script>

@endsection
