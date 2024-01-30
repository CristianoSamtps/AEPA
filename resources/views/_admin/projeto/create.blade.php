@extends('layouts.admin')

@section('title')
    Novo Projeto
@endsection

@section('backoffice-content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('admin.projeto.store') }}" class="form-group"
                    enctype="multipart/form-data">
                    @csrf
                    @include('_admin.projeto.partials.add-edit')
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="ok">Guardar</button>
                        <a href="{{ route('admin.projeto.index') }}" class="btn btn-default">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
