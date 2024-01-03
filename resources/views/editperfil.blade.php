@extends('layouts.master')

@extends('layouts.usertemplate')

@section('title', 'AEPA - Editar Perfil')

@section('styles')
    <link href="{{ asset('/css/editperfil.css') }}" rel="stylesheet">
@endsection

@section('main-content')

    <div class="container-fluid">

        <div>
            @if ($errors->any())
                @include ('layouts.partials.error')
            @endif
            @if (!empty(session('success')))
                @include ('layouts.partials.success')
            @endif
        </div>

        <div class="col-lg-12">

            <div class="row">

                <div id="dadosconta" class="col-lg-12">

                    <h2>Conta</h2>
                    <span class="s"><span class="x"></span></span>
                    <div class="espacamento"></div>

                    <div id="dados1" class="row">

                        <div class="imagemperfil" class="col-lg-4">
                            @if ($user->foto)
                                <img src="{{ asset('storage/user_fotos/' . $user->foto) }}" alt="Imagem de perfil">
                            @else
                                <img src="{{ asset('img/default_user.jpg') }}" alt="Imagem de perfil padrão">
                            @endif
                        </div>

                        <div class="col-lg-8">
                            <h2> {{ $user->name }} </h2>
                            <p>
                                @if ($user->tipo == 'M')
                                    Membro
                                @elseif($user->tipo == 'A')
                                    Admin
                                @endif
                            </p>
                        </div>

                        <div class="col-lg-2">
                            <button class="edit" href="">Editar Perfil</button>
                            <button class="membro" href="">Torne-se Membro</button>
                        </div>

                    </div>

                    <h2>Geral</h2>

                    <span class="s"><span class="x"></span></span>
                    <div class="espacamento"></div>

                    <div class="caixa-detalhes-grande" class="col-lg-12">
                        <span class="txt">Email</span>
                        <p> {{ $user->email }} </p></span>
                    </div>

                    <div id="dados2" class="row">

                        <div class="caixa-detalhes" class="col-lg-4">
                            <span class="txt">Número de Telemóvel</span>
                            <p>{{ $user->telemovel }}</p>
                        </div>

                        <div class="caixa-detalhes" class="col-lg-4">
                            <span class="txt">Género</span>
                            <p id="genero">
                                @if ($user->genero == 'M')
                                    Masculino
                                @elseif($user->genero == 'F')
                                    Feminino
                                @elseif($user->genero == 'O')
                                    Outro
                                @else
                                    <!-- Adicione uma mensagem padrão ou lógica adicional, se necessário -->
                                    {{ $user->genero }}
                                @endif
                            </p>
                        </div>

                        <div class="caixa-detalhes" class="col-lg-4">
                            <span class="txt">Número de Telemóvel</span>
                            <p>{{ $user->telemovel }}</p>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row">
                <div id="pagamentos" class="col-lg-12">
                </div>
            </div>

        </div>





        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Editar Utilizador
            </div>
            <div class="card-body">

                <form method="POST" action="{{ route('updateperfil', $user) }}" class="form-group"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if ($user->foto)
                        <img src="{{ asset('storage/user_fotos/' . $user->foto) }}" alt="User foto" width="200"
                            class="mt-1 mb-3">
                    @endif
                    @include('_admin.users.partials.add-edit')


                    <div class="form-group">
                        <label for="inputMP">Método de pagamento</label>
                        <select name="metodo_pag" id="inputMP" class="form-control">
                            <option value=""> </option>
                            <option value="CC" {{ old('metodo_pag', $user->metodo_pag) == 'CC' ? 'selected' : '' }}>
                                Cartão de
                                crédito</option>
                            <option value="TB" {{ old('metodo_pag', $user->metodo_pag) == 'TB' ? 'selected' : '' }}>
                                Tranferencia Bancária</option>
                            <option value="RE" {{ old('metodo_pag', $user->metodo_pag) == 'RE' ? 'selected' : '' }}>
                                Referencia
                                Entidade</option>
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
@endsection
