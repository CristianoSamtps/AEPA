@extends('layouts.admin')

@section('title')
Editar Parceiro
@endsection

@section('backoffice-content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            Editar Parceiro
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.patrocinadores.update', $partner) }}" class="form-group inline">
                @csrf
                @method('PUT')
                @include('_admin.patrocinadores.partials.add-edit')
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Guardar</button>
                    <a href="{{ route('admin.patrocinadores.index') }}" class="btn btn-default">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection