@extends('layouts.master')


@section('title', 'AEPA')

@section('title', 'AEPA | Membro')


@section('styles')
    <link href="{{ asset('/css/styleTornarMembro.css') }}" rel="stylesheet">
@endsection

@section('main')
<div class="container">
    <h1>Inscrição para Voluntariado</h1>

    @if(isset($projeto) && isset($user))
    <form action="{{ route('submit.volunteer.application') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="projetoNome">Nome do Projeto</label>
            <input type="text" class="form-control" id="projetoNome" value="{{ $projeto->titulo }}" readonly>
        </div>

        <div class="form-group">
            <label for="projetoNome">ID do Projeto</label>
            <input type="text" class="form-control" id="projetoNome" value="{{ $projeto->id }}" readonly>
        </div>

        <div class="form-group">
            <label for="usuarioNome">Nome do Usuário</label>
            <input type="text" class="form-control" id="usuarioNome" value="{{ $user->name }}" readonly>
        </div>

        <!-- Outros campos do formulário -->

        <button type="submit">Enviar Inscrição</button>
    </form>
    @else
    <p>Não foram encontrados dados para a inscrição.</p>
    @endif
</div>
@endsection

