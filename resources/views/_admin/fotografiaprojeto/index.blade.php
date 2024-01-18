@extends('layouts.admin')

@section('title')
    Projeto: {{ $projeto->titulo }}
@endsection

@section('backoffice-content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{ route('admin.fotografias.create', $projeto) }}">
                <i class="fas fa-plus"></i> Nova Fotografia
            </a>
            <a class="btn btn-secundary" href="{{ route('admin.projeto.index') }}">
                <i class="fas fa-fun"></i> Voltar para Projetos
            </a>
        </div>
        <div class="card-body">
            @if (count($fotografias))
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Destaque</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fotografias as $photo)
                                <tr>
                                    <td><img src="{{ asset('storage/project_photos/' . $photo->foto) }}" alt="Fotografia">
                                    </td>
                                    <td>
                                        @if ($photo->destaque == 1)
                                            Sim
                                        @else
                                            Não
                                        @endif
                                    </td>
                                    <td nowrap class="d-flex">
                                        <form method="POST"
                                            action="{{ route('admin.fotografias.destroy', [$projeto, $photo]) }}"
                                            role="form" class="inline"
                                            onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs btn-danger btn-p ml-1">
                                                <i class="fas fa-trash fa-xs"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <h6>Não existem fotografias registadas para o projeto</h6>
            @endif

        </div>
    </div>

@endsection
