@extends('layouts.master')

@section('title', 'AEPA | Projetos de Voluntariado')

@section('styles')
    <link href="{{ asset('/css/voluntariado.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    {{-- Adicionando Bootstrap para suportar os modais --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('main')
    <div class="projects-section">
        <h1 id="projects-title">Voluntariado</h1>
        <div class="projects-list" data-aos="fade-right">
            <div class="project-row project-row-1">
                @if ($projetosVoluntariado->isEmpty())
                    <p>De momento não temos projetos de voluntariado registados, iremos ter brevemente.</p>
                @else
                    @foreach ($projetosVoluntariado as $projeto)
                        <div class="project">
                            <h3>{{ $projeto->localidade }}</h3>
                            @foreach ($fotografias as $fotografia)
                                @if ($fotografia->projeto_id === $projeto->id)
                                    <img src="{{ asset('storage/project_photos/' . $fotografia->foto) }}"
                                        alt="{{ $projeto->titulo }}">
                                @break
                            @endif
                        @endforeach
                        <h2>{{ $projeto->titulo }}</h2>
                        <button class="green-btn1"><a href="{{ route('inscricao', $projeto->id) }}">Voluntariar</a></button>

                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

{{-- Incluindo jQuery e Bootstrap JS para suportar os modais --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/projects.js') }}"></script>
@endsection
