@extends('layouts.admin')


@section('title')
Show - {{ $user->name }}
@endsection

@section('backoffice-content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            Informação do Utilizador
        </div>
        <div class="card-body">

            @if ($user->foto)
            <img src="{{ asset('storage/user_fotos/' . $user->foto) }}" class="img-post" alt="Foto do Utilizador" height="100px">
            @else
            <img src="{{ asset('img/default_user.jpg') }}" class="img-post" alt="Foto pré-definida" height="100px">
            @endif


            <div><strong>Nome:</strong> {{ $user->name }} </div>
            <div><strong>E-mail:</strong> {{ $user->email }} </div>
        </div>
    </div>
</div>
@endsection