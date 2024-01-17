@extends('layouts.admin')

@section('title')
    Detalhes do Tipo de Plano
@endsection

@section('backoffice-content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detalhes do Tipo de Plano</h6>
            </div>
            <div class="card-body">
                <form class="form-group">
                    {{-- Nome e Duração do Tipo de Plano --}}
                    <div class="form-group">
                        <label>Nome do Tipo de Plano</label>
                        <input type="text" class="form-control" value="{{ $planType->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Duração (em meses)</label>
                        <input type="text" class="form-control" value="{{ $planType->duracao }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Preço (em euros)</label>
                        <input type="text" class="form-control" value="{{ $planType->valor }}" readonly>
                    </div>

                    {{-- Botões de Ação --}}
                    <a href="{{ route('admin.plantypes.edit', $planType->id) }}" class="btn btn-warning">Editar</a>
                    <a href="{{ route('admin.plantypes.index') }}" class="btn btn-default">Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
