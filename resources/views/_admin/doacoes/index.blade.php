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
              <th>Titulo</th>
              <th>Valor doado</th>
              <th>Membro</th>
              <th>Projeto associado</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($doacoes as $doacao)
            <tr>
            <td>{{ $doacao->id }}</td>
              <td>{{ $doacao->title }}</td>
              <td>{{$doacao->valor}} €</td>
              <td>{{ $doacao->member_doner?$doacao->member_doner->user->name : 'Anónimo'}}</td>
              <td>{{ $doacao->projeto->titulo ?? 'Não tem' }}</td>
              <td nowrap class="d-flex">
                <a class="btn btn-xs btn-primary btn-p" href="{{route('admin.doacoes.show',$doacao)}}"><i class="fas fa-eye fa-xs"></i></a>
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

@section("moreScripts")
<script>

	$('#dataTable').dataTable( {
		destroy: true,
		"order": [[ 1, 'asc' ]],
		"columns": [
		null,
		null,
		null,
		null,
        null,
		{ "orderable": false }
		]
	} );

</script>
@endsection

