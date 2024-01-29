@extends('layouts.admin')

@section('title')
    Projetos de Voluntariado
@endsection

@section('backoffice-content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Projetos de Voluntariado</h6>
        </div>
        <div class="card-body">
            @if ($projetosVoluntariado->isNotEmpty())
                <div class="table-responsive">
                    <table class="table" id="dataTable">
                        <thead>
                            <tr>
                                <th>Nome do Projeto</th>
                                <th>Localidade</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projetosVoluntariado as $projeto)
                                <tr>
                                    <td>{{ $projeto->titulo }}</td>
                                    <td>{{ $projeto->localidade }}</td>
                                    <td>
                                        <!-- Aqui você pode adicionar botões de ação como editar ou excluir -->
                                        <a class="btn btn-xs btn-primary"
                                            href="{{ route('admin.voluntario.show', $projeto) }}">Ver</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <h6>Não existem projetos de voluntariado registrados</h6>
            @endif
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
                null,
                {
                    "orderable": false
                }
            ]
        });
    </script>
@endsection
