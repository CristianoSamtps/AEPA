@extends('layouts.admin')


@section('title')
    Subscrições
@endsection

@section('backoffice-content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            @if (count($plans))
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Método de Pagamento</th>
                                <th>Próximo Pagamento</th>
                                <th>Membro Doador</th>
                                <th>Tipo de Plano</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plans as $plan)
                                <tr>
                                    <td>{{ $plan->date->format('d/m/Y') }}</td>
                                    <td>{{ $plan->metodo_pag }}</td>
                                    <td>{{ $plan->proximo_pag->format('d/m/Y') }}</td>
                                    <td>{{ $plan->memberDoner->name }}</td> {{-- Asumindo que existe uma coluna 'name' no modelo MemberDoner --}}
                                    <td>{{ $plan->planType->name }}</td>
                                    <td nowrap class="d-flex">
                                        {{-- Botões de ação, substitua 'admin.plans' pelo nome de rota correto --}}
                                        <a class="btn btn-xs btn-primary"
                                            href="{{ route('admin.plans.show', $plan) }}">Ver</a>
                                        <a class="btn btn-xs btn-warning ml-1"
                                            href="{{ route('admin.plans.edit', $plan) }}">Editar</a>
                                        <form method="POST" action="{{ route('admin.plans.destroy', $plan) }}"
                                            onsubmit="return confirm('Tem certeza que deseja excluir este plano?');">
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
                <h6>Não existem categorias registadas</h6>
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
