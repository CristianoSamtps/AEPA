@extends('layouts.admin')


@section('title')
    Projetos
@endsection

@section('backoffice-content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{ route('admin.projeto.create') }}">
                <i class="fas fa-plus"></i> Novo Projeto
            </a>
        </div>
        <div class="card-body">
            @if (count($projetos))
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Subtitulo</th>
                                <th>Descrição</th>
                                <th>Estado</th>
                                <th>Localidade</th>
                                <th>Objetivos</th>
                                <th>Destaque</th>
                                {{-- <th>Data Final</th> --}}
                                {{-- <th>Voluntariado</th>
                                <th>Parceiros</th> --}}
                                <th>Funções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projetos as $projeto)
                                <tr>
                                    <td>{{ $projeto->titulo }}</td>
                                    <td>{{ $projeto->subtitulo }}</td>
                                    <td>{{ $projeto->descricao }}</td>
                                    <td>{{ $projeto->estado }}</td>
                                    <td>{{ $projeto->localidade }}</td>
                                    <td>{{ $projeto->objetivos }}</td>
                                    <td>{{ $projeto->fotografias }}</td>
                                    {{-- <td>{{ $projeto->data_final }}</td> --}}
                                    {{-- <td>{{ $projeto->voluntariado }}</td> --}}
                                    {{-- <td>
                                        @foreach ($projeto->partnerships as $partner)
                                            {{ $partner->name }}{{ $loop->last ? '' : ',' }}
                                        @endforeach
                                    </td> --}}
                                    <td nowrap class="d-flex">
                                        <a class="btn btn-xs btn-primary btn-p"
                                            href="{{ route('admin.projeto.show', $projeto) }}"><i
                                                class="fas fa-eye fa-xs"></i></a>
                                        <a class="btn btn-xs btn-warning btn-p"
                                            href="{{ route('admin.projeto.edit', $projeto) }}"><i
                                                class="fas fa-pen fa-xs"></i></a>
                                        <form method="POST" action="{{ route('admin.projeto.destroy', $projeto) }}" role="form" class="inline"
                                            onsubmit="return confirm('Confirma que pretende eliminar este projeto?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs btn-danger btn-p"><i
                                                    class="fas fa-trash fa-xs"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <h6>Não existem projetos registados</h6>
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
                [0, 'asc']
            ],
            "columns": [
                null,
                {
                    "orderable": false
                }
            ]
        });
    </script>
@endsection
