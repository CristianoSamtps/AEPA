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
                                <th>ID do Projeto</th>
                                <th>Titulo</th>
                                <th>Objetivos</th>
                                <th>Estado</th>
                                <th>Funções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projetos as $projeto)
                                <tr>
                                    <td>{{ $projeto->id }}</td>
                                    <td>{{ $projeto->titulo }}</td>
                                    <td>{{ $projeto->objetivos }}€</td>
                                    <td>{{ $projeto->estado }}</td>
                                    <td class="d-flex">
                                        <a class="btn btn-xs btn-primary btn-p ml-1"
                                            href="{{ route('admin.projeto.show', $projeto) }}"><i
                                                class="fas fa-eye fa-xs"></i></a>
                                        <a class="btn btn-xs btn-warning btn-p ml-1"
                                            href="{{ route('admin.projeto.edit', $projeto) }}"><i
                                                class="fas fa-pen fa-xs"></i></a>
                                        <a class="btn btn-xs btn-success btn-p ml-1"
                                            href="{{ route('admin.fotografiasprojeto.index', $projeto) }}"><i
                                                class="fas fa-image fa-xs"></i></a>
                                        <form method="POST" action="{{ route('admin.projeto.destroy', $projeto) }}"
                                            role="form" class="inline"
                                            onsubmit="return confirm('Confirma que pretende eliminar este projeto?');">
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
                <h6>Não existem projetos registados</h6>
            @endif
        </div>
    </div>
@endsection

@section('moreScripts')
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({
                "lengthMenu": [5, 10, 15, 20],
                "order": [
                    [0, 'asc']
                ],
                "columnDefs": [
                    { "orderable": false, "targets": -1 }
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
        });
    </script>
@endsection
