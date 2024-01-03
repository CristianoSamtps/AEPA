@extends('layouts.admin')


@section('title')
    Informação dos planos
@endsection

@section('backoffice-content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                @foreach ($plantypes as $planType)
                    <tr>
                        <td>{{ $planType->name }}</td>
                        <td>{{ $planType->duracao }} meses</td>
                        <td>{{ number_format($planType->valor, 2) }}€</td>
                        <td>{{ $planType->proximo_pag ? \Carbon\Carbon::parse($planType->proximo_pag)->format('d/m/Y') : 'N/A' }}</td>
                        <td>
                            <a href="{{ route('admin.plantypes.edit', $planType->id) }}" class="btn btn-warning">Editar</a>
                            {{-- Adicione mais botões de ação conforme necessário --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('admin.plantypes.index') }}" class="btn btn-default">Voltar</a>
</div>
@endsection
