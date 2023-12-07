@extends('layouts.admin')


@section("title")
    Informação do Projeto
@endsection

@section('backoffice-content')
<div class="container-fluid">

     <div class="card shadow mb-4">


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
                <td>
                @foreach ($event->partnerships as $partner)
                {{$partner->name}}
                <br>
                @endforeach
                </td>
              </tr>
            </tbody>
          </table>
	</div>
    <a href="{{route('admin.projeto.index')}}" class="btn btn-default">Voltar</a>
</div>
@endsection
