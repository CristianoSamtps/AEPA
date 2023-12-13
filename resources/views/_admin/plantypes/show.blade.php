@extends('layouts.admin')


@section('title')
    Informação de Subscrição
@endsection

@section('backoffice-content')
    <div class="container-fluid">

        <div class="card shadow mb-4">


            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                            <td>{{ $plan->memberDoner->name }}</td> {{-- Assumindo que a relação e a coluna 'name' existem --}}
                            <td>{{ $plan->planType->name }}</td> {{-- Assumindo que a relação e a coluna 'name' existem --}}
                            <td>
                                <a href="{{ route('admin.plans.edit', $plan->id) }}" class="btn btn-warning">Editar</a>
                                {{-- Adicione mais botões de ação conforme necessário --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('admin.plans.index') }}" class="btn btn-default">Voltar</a>
    </div>
@endsection
