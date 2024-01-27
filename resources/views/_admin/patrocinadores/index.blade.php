@extends('layouts.admin')

@section('title')
    Patrocinadores
@endsection

@section('backoffice-content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{ route('admin.patrocinadores.create') }}">
                <i class="fas fa-plus"></i> Novo Patrocinador
            </a>
        </div>
        <div class="card-body">
            @if (!is_null($partners) && count($partners) > 0)
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Foto do Patrocinador</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                {{-- Adicione outros cabeçalhos conforme necessário --}}
                                <th>Funções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($partners as $partner)
                                <tr>
                                <td class="imagempartner">
                                    @if ($partner->foto)
                                    <img src="{{ asset('storage/partner_fotos/' . $partner->foto) }}" class="img-post" alt="Foto do Parceiro" height="60px">
                                    @else
                                    <img src="{{ asset('img/default_user.jpg') }}" class="img-post" alt="Foto pré-definida" height="100px">
                                    @endif
                                </td>
                                    <td>{{ $partner->id }}</td>
                                    <td>{{ $partner->name }}</td>
                                    <td>{{ $partner->descricao }}</td>
                                    {{-- Adicione outras colunas conforme necessário --}}
                                    <td nowrap class="d-flex">
                                        <a class="btn btn-xs btn-primary btn-p ml-1"
                                            href="{{ route('admin.patrocinadores.show', $partner) }}"><i
                                                class="fas fa-eye fa-xs"></i></a>
                                        <a class="btn btn-xs btn-warning btn-p ml-1"
                                            href="{{ route('admin.patrocinadores.edit', $partner) }}"><i
                                                class="fas fa-pen fa-xs"></i></a>
                                        {{-- Adicione outras ações conforme necessário --}}
                                        <form method="POST" action="{{ route('admin.patrocinadores.destroy', $partner) }}"
                                            role="form" class="inline"
                                            onsubmit="return confirm('Confirma que pretende eliminar este patrocinador?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs btn-danger btn-p ml-1"><i
                                                    class="fas fa-trash fa-xs"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <h6>Não existem patrocinadores registados</h6>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            if ($.fn.DataTable.isDataTable('#dataTable')) {
                $('#dataTable').DataTable().destroy();
            }

            $('#dataTable').DataTable({
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
        });
    </script>
@endsection
