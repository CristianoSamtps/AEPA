@extends('layouts.admin')


@section('title')
    Planos
@endsection

@section('backoffice-content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{ route('admin.plantypes.create') }}">
                <i class="fas fa-plus"></i> Novo Plano
            </a>
        </div>
        <div class="card-body">
            @if ($plantypes->count())
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Duração</th>
                                <th>Valor</th>
                                <th>Próximo Pagamento</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plantypes as $plantype)
                                <tr>
                                    <td>{{ $plantype->name }}</td>
                                    <td>{{ $plantype->duracao }}</td> {{-- Ajuste conforme o formato da sua data --}}
                                    <td>{{ number_format($plantype->valor, 2, ',', '.') }}€</td>
                                    <td>{{ $plantypes->proximo_pag->format('d/m/Y') }}</td>
                                    <td nowrap class="d-flex">
                                        <a class="btn btn-xs btn-primary"
                                            href="{{ route('admin.plantype.show', $plantype) }}">Ver</a>
                                        <a class="btn btn-xs btn-warning ml-1"
                                            href="{{ route('admin.plantype.edit', $plantype) }}">Editar</a>
                                        <form method="POST" action="{{ route('admin.plantypes.destroy', $planType) }}"
                                            onsubmit="return confirm('Tem certeza que deseja excluir este tipo de plano?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs btn-danger ml-1">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <h6>Não existem tipos de plano registados</h6>
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
                {
                    "orderable": false
                }
            ]
        });
    </script>
@endsection
