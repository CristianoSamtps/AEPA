@extends('layouts.master')

@section('styles')
<link href="{{ asset ('/css/styleIndex.css') }}" rel="stylesheet">
@endsection

@section('main')


<main id="main">
    <div class="container-fluid">
        <div>
            @if ($errors->any())
                @include ('layouts.partials.error')
            @endif
            @if (!empty(session('success')))
                @include ('layouts.partials.success')
            @endif
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Editar Utilizador
            </div>
            <div class="card-body">

                <form method="POST" action="{{ route('users.updateperfil', $user) }}" class="form-group"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if ($user->foto)
                        <img src="{{ asset('storage/user_fotos/' . $user->foto) }}" alt="User foto" width="200" class="mt-1 mb-3">
                    @endif
                    @include('_admin.users.partials.add-edit')


                    <div class="form-group">
                        <label for="inputMP">Método de pagamento</label>
                        <select name="metodo_pag" id="inputMP" class="form-control">
                            <option value=""> </option>
                            <option value="CC" {{old('metodo_pag',$user->metodo_pag)=='CC'?'selected':''}}>Cartão de crédito</option>
                            <option value="TB" {{old('metodo_pag',$user->metodo_pag)=='TB'?'selected':''}}>Tranferencia Bancária</option>
                            <option value="RE" {{old('metodo_pag',$user->metodo_pag)=='RE'?'selected':''}}>Referencia Entidade</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="ok">Guardar</button>

                        <a href="{{ route('admin.users.index') }}" class="btn btn-default">Cancelar</a>
                    </div>

                </form>
                @if ($user->foto)
                    <form method="POST" action="{{ route('admin.users.destroyFoto', $user) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Apagar foto</button>
                    </form>
                @endif

                <a href="{{ route('admin.users.sendActivationEmail', $user) }}" class="btn btn-primary">Enviar
                    email de ativação</a>
            </div>
        </div>
    </div>
</main>
@endsection
