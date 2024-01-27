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
                <form method="POST" action="{{ route('admin.patrocinadores.update', $partner) }}" class="form-group"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if ($partner->foto)
                        <img src="{{ asset('storage/partner_fotos/' . $partner->foto) }}" alt="Partner foto" width="200"
                            class="mt-1 mb-3">
                    @endif
                    @include('_admin.patrocinadores.partials.add-edit')
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="ok">Guardar</button>
                        <a href="{{ route('admin.patrocinadores.index') }}" class="btn btn-default">Cancelar</a>
                    </div>
                </form>
                @if ($partner->foto)
                    <form method="POST" action="{{ route('admin.patrocinadores.destroyFoto', $partner) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Apagar foto</button>
                    </form>
                @endif

            </div>
        </div>
    </div>
@endsection
