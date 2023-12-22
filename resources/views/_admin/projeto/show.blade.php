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
                        <th>Estado</th>
                        <th>Localidade</th>
                        <th>Objetivos</th>
                        {{-- <th>Data Final</th>
                        <th>Voluntariado</th>
                        <th>Parceiros</th> --}}
                        <th>Fotografia</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $projeto->titulo }}</td>
                        <td>{{ $projeto->subtitulo }}</td>
                        <td>{{ $projeto->descricao }}</td>
                        <td>{{ $projeto->estado }}</td>
                        <td>{{ $projeto->localidade }}</td>
                        <td>{{ $projeto->objetivos }}</td>
                        <td>{{ $projeto->fotografias }}</td>
                        {{-- <td>{{ $projeto->data_final }}</td> --}}
                        {{-- <td>{{ $projeto->voluntariado }}</td>
                        <td>
                            @foreach ($projeto->partnerships as $partner)
                                {{ $partner->name }}
                                <br>
                            @endforeach
                        </td> --}}
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="{{ route('admin.projeto.index') }}" class="btn btn-default">Voltar</a>
    </div>
@endsection
