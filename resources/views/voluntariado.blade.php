@extends('layouts.master')

@section('title', 'AEPA | Projetos de Voluntariado')

@section('styles')
    <link href="{{ asset('/css/voluntariado.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
@endsection

@section('main')
    <div class="container col-md-12">
        @if ($errors->any())
            @include ('layouts.partials.error_master')
        @endif
        @if (!empty(session('success')))
            @include ('layouts.partials.modal_master')
        @endif
    </div>
    <div class="projects-section">
        <h1 id="projects-title">Voluntariado</h1>
        <button class="volunt"><a href="{{ route('projects') }}">Ver todos os Projetos</a></button>
        <div class="projects-list" data-aos="fade-right">
            <div class="project-row project-row-1">
                @if ($projetosVoluntariado->isEmpty())
                    <p>De momento não temos projetos de voluntariado registados, iremos ter brevemente.</p>
                @else
                    @foreach ($projetosVoluntariado as $projeto)
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
                        <button class="green-btn1"><a href="{{ route('inscricao', $projeto->id) }}"
                                style="color:#fff">Voluntariar</a></button>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

<script src="{{ asset('js/projects.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#exampleModal').modal('show');
            });
        </script>
@endsection
