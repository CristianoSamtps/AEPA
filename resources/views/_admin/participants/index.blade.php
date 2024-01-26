@extends('layouts.admin')


@section('title')
    Participantes do evento - {{ $participantsevent }}
@endsection

@section('backoffice-content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{ route('admin.participantes.create', $event) }}">
                <i class="fas fa-plus"></i> Novo participante
            </a>
            <a class="btn btn-secundary" href="{{ route('admin.eventos.index') }}">
                <i class="fas fa-fun"></i> Voltar para eventos
            </a>
        </div>
        <div class="card-body">
            @if (count($participant))
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Observações</th>
                                <th>id da inscrição</th>
                                <th>Data de inscrição</th>
                                <th>Funções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($participant as $participant)
                                <tr>
                                    <td>{{ $participant->member_doner->user->name }}</td>
                                    <td>{{ $participant->obs }}</td>
                                    <td>{{ $participant->id }}</td>
                                    <td>{{ $participant->created_at }}</td>

                                    <td nowrap class="d-flex">
                                        {{-- <a class="btn btn-xs btn-warning btn-p ml-1"
                                            href="{{ route('admin.eventos.edit', $participant) }}"><i
                                                class="fas fa-pen fa-xs"></i></a> --}}
                                                <form method="POST" action="{{ route('admin.participantes.destroy', [$event,$participant]) }}"
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
                <h6>Não existem participantes registados</h6>
            @endif
        </div>
    </div>
    </div>
@endsection

@section('scripts')
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
