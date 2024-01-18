@extends('layouts.admin')

@section('title')
    Informação do Projeto
@endsection

@section('backoffice-content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Subtitulo</th>
                        <th>Descrição</th>
                        <th>Localidade</th>
                        <th>Data Inicial</th>
                        <th>Data Final</th>
                        <th>Voluntariado</th>
                        <th>Parceiros</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $projeto->titulo }}</td>
                        <td>{{ $projeto->subtitulo }}</td>
                        <td>{{ $projeto->descricao }}</td>
                        <td>{{ $projeto->localidade }}</td>
                        <td>{{ $projeto->created_at }}</td>
                        <td>{{ $projeto->data_final }}</td>
                        <td>
                            @if ($projeto->voluntariado == 1)
                                Sim
                            @else
                                Não
                            @endif
                        </td>
                        <td>
                            @foreach ($projeto->partnerships as $partner)
                                {{ $partner->name }}
                                <br>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="{{ route('admin.projeto.index') }}" class="btn btn-default">Voltar</a>
    </div>
@endsection
