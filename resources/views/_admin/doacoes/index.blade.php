@extends('layouts.admin')
@section("title")
    Doações
@endsection


@section('styles')
    <link href="{{ asset('/css/styleG.css') }}" rel="stylesheet">
@endsection

@section('backoffice-content')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
      @if (count($doacoes))
      <div class="table-responsive">
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
            @foreach($doacoes as $doacao)
            <tr>
              <td>{{$doacao->id}}</td>
              <td>{{$doacao->title}}</td>
              <td>{{$doacao->valor}}</td>
              <td> @if ($doacao->anonimo == 'S') Anonimo
                @else {{ $doacao->member_doner->user->name}}
                @endif</td>
              <td>{{$doacao->projeto_id}}</td>
              <td nowrap class="d-flex">
                <a class="btn btn-xs btn-primary btn-p" href=""><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{ route('admin.doacoes.edit', $doacao) }}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{ route('admin.doacoes.destroy', $doacao) }}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                  @csrf
                  @method("DELETE")
                  <button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @else
       <h6>Não existem categorias registadas</h6>
       @endif
    </div>
  </div>
</div>
@endsection
