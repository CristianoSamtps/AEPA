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
                                <th>Membro Doador</th>
                                <th>ID Membro</th>
                                <th>Tipo de Plano</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plans as $plan)
                                <tr>
                                    <td>{{ $plan->member_doner ? $plan->member_doner->user->name : 'Membro Não Encontrado' }}</td>
                                    <td>{{ $plan->member_doner ? $plan->member_doner->id : 'Membro Não Encontrado' }}</td>
                                    <td>{{ $plan->planType->name }}</td>
                                    <td nowrap class="d-flex">
                                        <a class="btn btn-xs btn-warning ml-1"
                                            href="{{ route('admin.plans.edit', $plan) }}"><i
                                            class="fas fa-pen fa-xs"></i></a>
                                        <form method="POST" action="{{ route('admin.plans.destroy', $plan) }}"
                                            onsubmit="return confirm('Tem certeza que deseja excluir este plano?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs btn-danger ml-1"><i
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
