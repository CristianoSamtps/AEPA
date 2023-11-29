@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação do Utilizador
            </div>
            <div class="card-body">

                @if ($user->foto)
                    <div>
                        <img alt="User foto" src="{{ asset('storage/users_fotos/' . $user->foto) }}">
                    </div>
                @endif


                <div><strong>Nome:</strong> {{ $user->name }} </div>
                <div><strong>E-mail:</strong> {{ $user->email }} </div>
            </div>
        </div>
    </div>
@endsection
