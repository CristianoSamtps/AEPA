@extends('layouts.admin')


@section('title')
    Eventos
@endsection

@section('backoffice-content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{ route('admin.eventos.create') }}">
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
                                <th>Galeria</th>
                                <th>Funções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $event->name }}</td>
                                    <td>{{ $event->descricao }}</td>
                                    <td>{{ $event->localizacao }}</td>
                                    <td>{{ $event->vagas }}</td>
                                    <td>
                                        @foreach ($event->partnerships as $partner)
                                            {{ $partner->name }}{{ $loop->last ? '' : ',' }}
                                        @endforeach
                                    </td>
                                    <td>
                                        @if (count($event->photos))
                                            <img width="100"
                                                src="{{ asset('storage/event_photos/' .$event->photos()->orderBy('destaque', 'asc')->orderBy('created_at', 'desc')->first()->fotografia) }}"
                                                class="img-post" alt="Event image">
                                        @endif

                                    </td>
                                    <td nowrap class="d-flex">
                                        <a class="btn btn-xs btn-primary btn-p"
                                            href="{{ route('admin.eventos.show', $event) }}"><i
                                                class="fas fa-eye fa-xs"></i></a>
                                        <a class="btn btn-xs btn-warning btn-p ml-1"
                                            href="{{ route('admin.eventos.edit', $event) }}"><i
                                                class="fas fa-pen fa-xs"></i></a>
                                        <a class="btn btn-xs btn-info btn-p ml-1"
                                            href="{{ route('admin.participantes.index', $event) }}"><i
                                                class="fas fa-users fa-xs"></i></a>
                                        <a class="btn btn-xs btn-success btn-p ml-1"
                                            href="{{ route('admin.fotografias.index', $event) }}"><i
                                                class="fas fa-image fa-xs"></i></a>
                                        <form method="POST" action="{{ route('admin.eventos.destroy', $event) }}"
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
                <h6>Não existem categorias registadas</h6>
            @endif
        </div>
    </div>
    </div>
@endsection

@section('moreScripts')
    <script>
        $('#dataTable').dataTable({
            "lengthMenu": [5, 10, 15, 20],
            destroy: true,
            "order": [
                [0, 'asc']
            ],
            "columns": [
                null,
                null,
                null,
                null,
                {
                    "orderable": false
                },
                {
                    "orderable": false
                },
                {
                    "orderable": false
                }
            ],
            "language": {
                "lengthMenu": "Mostrar _MENU_ registos por página",
                "zeroRecords": "Não existem registos",
                "info": "Página _PAGE_ de _PAGES_",
                "infoEmpty": "Sem registos associados",
                "infoFiltered": "(Pesquisa efetuada em _MAX_  registos)",
                "search": "Procura:",

                "paginate": {
                    "first": "Primeiro",
                    "last": "Último",
                    "next": "Seguinte",
                    "previous": "Anterior"
                },
            }
        });
    </script>
@endsection
