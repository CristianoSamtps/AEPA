@extends('layouts.admin')


@section("title")
    Eventos
@endsection

@section('backoffice-content')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="">
        <i class="fas fa-plus"></i> Novo evento
      </a>
    </div>
    <div class="card-body">
      @if (count($events))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Descriçao</th>
              <th>Localização</th>
              <th>Vagas</th>
              <th>Parceiros</th>
              <th>Funções</th>
            </tr>
          </thead>
          <tbody>
            @foreach($events as $event)
            <tr>
              <td>{{$event->name}}</td>
              <td>{{$event->descricao}}</td>
              <td>{{$event->localizacao}}</td>
              <td>{{$event->vagas}}</td>
              <td>{{$event->partnership_id}}</td>
              <td nowrap class="d-flex">
                <a class="btn btn-xs btn-primary btn-p" href="{{route('admin.eventos.show',$event)}}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href=""><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
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

@section("scripts")
<script>
  $('#dataTable').dataTable( {
  destroy: true,
    "order": [[ 0, 'asc' ]],
  "columns": [
    null,
    { "orderable": false }
  ]
} );

</script>
@endsection
