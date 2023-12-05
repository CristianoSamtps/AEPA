@extends('layouts.admin')


@section("title")
    Informação do Evento
@endsection

@section('backoffice-content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">
			<div><strong>Nome:</strong> {{$event->name}} </div>
		</div>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Descriçao</th>
                <th>Localização</th>
                <th>Vagas</th>
                <th>Parceiros</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$event->name}}</td>
                <td>{{$event->descricao}}</td>
                <td>{{$event->localizacao}}</td>
                <td>{{$event->vagas}}</td>
                <td>{{$event->partnership_id}}</td>
              </tr>
            </tbody>
          </table>
	</div>
    <a href="{{route('admin.eventos.index')}}" class="btn btn-default">Cancelar</a>
</div>
@endsection
