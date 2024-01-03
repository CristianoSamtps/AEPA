@extends('layouts.admin')


@section("title")
    Informação da sugestão
@endsection

@section('backoffice-content')
<div class="container-fluid">
     <div class="card shadow mb-4">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Id</th>
                <th>Membro</th>
                <th>Sugestão</th>
                <th>Votos</th>
                <th>Listado</th>
                <th>Aprovado</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$sugestao->id}}</td>
                <td>{{$sugestao->member_doner->user->name}}</td>
                <td>{{$sugestao->sugestao}}</td>
                <td>{{$sugestao->votos}}</td>
                <td>{{$sugestao->listado}}</td>
                <td>{{$sugestao->aprovacao}}</td>
              </tr>
            </tbody>
          </table>
	</div>
    <a href="{{route('admin.sugestoes.index')}}" class="btn btn-default">Voltar</a>
</div>
@endsection
