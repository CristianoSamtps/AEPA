@extends('layouts.master')


@section('title', 'AEPA')

@section('title', 'AEPA | Membro')


@section('styles')
    <link href="{{ asset('/css/styleInscricao.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styleTornarMembro.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styleIndex.css') }}" rel="stylesheet">
@endsection

@section('main')
    <div class="container">
        <h1>Inscrição para Voluntariado</h1>
        @if (isset($projeto) && isset($user))
            <form action="{{ route('voluntariar', $projeto) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="projetoNome">Nome do Projeto</label>
                    <input type="text" class="form-control" id="projetoNome" name="projetoNome"
                        value="{{ $projeto->titulo }}" readonly disabled>
                </div>
                <div class="form-group">
                    <label for="projetoNome">ID do Projeto</label>
                    <input type="integer" class="form-control" id="idproj" name="idproj" value="{{ $projeto->id }}"
                        readonly disabled>
                </div>
                <div class="form-group">
                    <label for="usuarioNome">Nome do Usuário</label>
                    <input type="text" class="form-control" id="usuarioNome" name="member_doner_id"
                        value="{{ $user->name }}" readonly disabled>
                </div>
                <button class="green-btn3" type="submit">Enviar Inscrição</button>
            </form>
        @else
            <p>Não foram encontrados dados para a inscrição.</p>
        @endif
    </div>
@endsection
