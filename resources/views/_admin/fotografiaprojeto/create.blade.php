@extends('layouts.admin')

@section('title')
    Adicionar Nova Fotografia
@endsection

@section('backoffice-content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.fotografiasp.store', $projeto) }}" class="form-group"
                enctype="multipart/form-data">
                @csrf
                @include('_admin.fotografiaprojeto.partials.add-edit')
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Guardar</button>
                    <a href="{{ route('admin.fotografiasp.index', $projeto) }}" class="btn btn-default">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
