@extends('layouts.admin')


@section('title')
  Evento: {{$event->name}}
@endsection

@section('backoffice-content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{ route('admin.fotografias.create',$event) }}">
                <i class="fas fa-plus"></i> Nova fotografia
            </a>
        </div>
        <div class="card-body">
            @if (count($photos))
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Destaque</th>
                                <th>Descrição</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($photos as $photo)
                                <tr>
                                    <td><img width="100" src="{{asset('storage/event_photos/'.$photo->fotografia)}}" alt="Photo"></td>
                                     <td>{{ $photo->destaque }}</td>
                                     <td>{{ $photo->descricao }}</td>

                                    <td nowrap class="d-flex">

                                        <a class="btn btn-xs btn-warning btn-p ml-1"
                                            href="{{ route('admin.fotografias.edit', [$event,$photo]) }}"><i
                                                class="fas fa-pen fa-xs"></i></a>

                                        <form method="POST" action="{{ route('admin.fotografias.destroy', [$event,$photo]) }}"
                                            role="form" class="inline"
                                            onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs btn-danger btn-p ml-1"><i
                                                    class="fas fa-trash fa-xs"></i></button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <h6>Não existem photos registadas para o evento</h6>
            @endif
        </div>
    </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#dataTable').dataTable({
            destroy: true,
            "order": [
                [2, 'asc']
            ],
            "columns": [
                {
                    "orderable": false
                },
                null,
                null,
                {
                    "orderable": false
                },
            ]
        });
    </script>
@endsection
