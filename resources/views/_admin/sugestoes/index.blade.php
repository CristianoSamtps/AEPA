@extends('layouts.admin')
@section("title")
    Sugestões
@endsection


@section('styles')
    <link href="{{ asset('/css/styleG.css') }}" rel="stylesheet">
@endsection

@section('backoffice-content')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
      @if (count($sugestoes))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Sugestão</th>
              <th>Votos</th>
              <th>Aprovação</th>
              <th>Listado</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($sugestoes as $sugestao)
            <tr>
              <td>{{$sugestao->member_doner->user->name}}</td>
              <td>{{$sugestao->sugestao}}</td>
              <td>{{$sugestao->votos}}</td>
              <td>@if ($sugestao->aprovacao == 'S') Aprovado
                @elseif ($sugestao->aprovacao == 'N') Não aprovado @endif

              <td>@if ($sugestao->listado == 'L') Listado
                @elseif ($sugestao->listado == 'NL') Não listado @endif</td>
              <td nowrap class="d-flex">
                <a class="btn btn-xs btn-primary btn-p" href="{{ route('admin.sugestoes.show', $sugestao) }}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{ route('admin.sugestoes.edit', $sugestao) }}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{ route('admin.sugestoes.destroy', $sugestao) }}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
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
		"order": [[ 0, 'asc' ]],
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
