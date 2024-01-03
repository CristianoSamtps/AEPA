@extends('layouts.admin')


@section("title")
    Informação da doação
@endsection

@section('backoffice-content')
<div class="container-fluid">
     <div class="card shadow mb-4">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Id</th>
              <th>Titulo</th>
              <th>Valor doado</th>
              <th>Membro</th>
              <th>Projeto associado</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $doacao->id }}</td>
              <td>{{ $doacao->title }}</td>
              <td>{{$doacao->valor}} €</td>
              <td>{{ $doacao->member_doner->user->name ?? 'Anónimo'}}</td>
              <td>{{ $doacao->projeto->titulo ?? 'Não tem' }}</td>
              </tr>
            </tbody>
          </table>
	</div>
    <a href="{{route('admin.doacoes.index')}}" class="btn btn-default">Voltar</a>
</div>
@endsection
