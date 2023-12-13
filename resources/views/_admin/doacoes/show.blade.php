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
                <th>Title</th>
                <th>Valor</th>
                <th>Utilizador</th>
                <th>Projeto</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$doacao->id}}</td>
              <td>{{$doacao->title}}</td>
              <td>{{$doacao->valor}}</td>
              <td> @if ($doacao->anonimo == 'S') Anonimo
                @else {{ $doacao->member_doner->user->name}}
                @endif</td>
              <td>{{$doacao->projeto_id}}</td>
              </tr>
            </tbody>
          </table>
	</div>
    <a href="{{route('admin.doacoes.index')}}" class="btn btn-default">Voltar</a>
</div>
@endsection
