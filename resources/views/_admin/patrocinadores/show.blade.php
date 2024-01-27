@extends('layouts.admin')

@section('title')
Informação do Parceiro
@endsection


@section('backoffice-content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Descrição</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="{{ $partner->foto_url }}" alt="Foto do Parceiro" height="50px">
                    </td>
                    <td>{{ $partner->descricao }}</td>
                    <td>{{ $partner->name }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="{{ route('admin.patrocinadores.index') }}" class="btn btn-default">Voltar</a>
</div>
@endsection
