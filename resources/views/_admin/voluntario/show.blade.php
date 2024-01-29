@extends('layouts.admin')

@section('title', 'Voluntariado do Projeto')

@section('backoffice-content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Voluntários do Projeto: {{ $projeto->titulo }}</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID do Voluntário</th>
                            <th>Nome do Voluntário</th>
                            <!--<th>Ações</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($voluntarios as $voluntario)
                            <tr>
                                <td>{{ $voluntario->id }}</td>
                                <td>{{ $voluntario->user_name }}</td>
                                <!-- <td>
                                    <form action="{{ route('admin.voluntario.destroy', $voluntario->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Tem certeza que deseja remover este usuário do voluntariado?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs">
                                            Remover
                                        </button>
                                    </form>
                                </td> -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('admin.voluntario.index') }}" class="btn btn-default">Voltar</a>
            </div>
        </div>
    </div>
@endsection
