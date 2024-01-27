@extends('layouts.master')

@extends('layouts.usertemplate')

@section('title', 'AEPA - Editar Perfil')

@section('styles')
    <link href="{{ asset('/css/editperfil.css') }}" rel="stylesheet">
@endsection

@section('main-content')

    <div class="container-fluid">

        <div class="container col-md-12">
            @if ($errors->any())
                @include ('layouts.partials.error_master')
            @endif
            @if (!empty(session('success')))
                @include ('layouts.partials.modal_master')
                <style>
                    button.green-btn1 {
                        width: 238px;
                        height: 50px;
                        border-radius: 40px;
                        background: linear-gradient(91deg, #019E59 24.15%, #4C7864 103.74%, rgba(1, 158, 89, 0.00) 160.58%);
                        color: #ffff;
                        border: 0px;
                    }
                </style>
            @endif
        </div>

        <div id="dadosconta" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
            data-aos-duration="500">
            <form method="POST" action="{{ route('updateperfil', $user) }}" class="form-group"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h2>Conta</h2>
                <span class="s"><span class="x"></span></span>
                <div class="espacamento"></div>

                <div id="dados1" class="row">

                    <div class="imagemperfil" class="col-lg-3">
                        @if ($user->foto)
                            <img src="{{ asset('storage/user_fotos/' . $user->foto) }}" alt="Imagem de perfil">
                        @else
                            <img src="{{ asset('img/default_user.jpg') }}" alt="Imagem de perfil padrão">
                        @endif
                    </div>

                    <div class="col-lg-6">
                        <h2> {{ $user->name }} </h2>
                        <p class="tipo">
                            @if ($user->tipo == 'M')
                                Membro
                            @elseif($user->tipo == 'A')
                                Admin
                            @endif
                        </p>
                    </div>

                    <div class="col-lg-3">

                        <button class="edit" id="editarPerfilBtn" type="button">Editar Perfil</button>

                        <button type="submit" class="edit-guardar" name="ok" style="display: none;">Guardar</button>

                        <a href="{{ route('editperfil', auth()->user()) }}"><button class="cancelar"
                                style="display: none;">Cancelar</button></a>

                        <div class="upload-imagem" style="display: none;">
                            <label for="foto">Editar imagem de Perfil</label>
                            <input type="file" id="foto" class="inseririmagem" name="foto" />
                        </div>

                        <a href="{{ route('admin.users.sendActivationEmail', $user) }}">
                            <button type="submit" class="edit-email" name="ok" style="display: none;">Email de
                                Confirmação</button>
                        </a>

                        <a href="{{ route('tornarMembro') }}"><button id="membroBtn" class="membro">Torne-se
                                Membro</button></a>
                    </div>

                </div>

                <script>
                    document.getElementById('editarPerfilBtn').addEventListener('click', function() {
                        document.querySelector('.edit-guardar').style.display = 'inline-block';
                        document.querySelector('.cancelar').style.display = 'inline-block';
                        document.querySelector('.upload-imagem').style.display = 'inline-block';
                        document.querySelector('.edit-email').style.display = 'block';
                        document.getElementById('editarPerfilBtn').style.display = 'none';
                        document.getElementById('membroBtn').style.display = 'none';

                        document.querySelectorAll('.input').forEach(function(input) {
                            input.removeAttribute('disabled');
                        });

                        // Muda a CLASS de fundo das caixas detalhe
                        document.querySelectorAll('.caixa-detalhes, .caixa-detalhes-grande').forEach(function(caixa) {
                            caixa.classList.add('editavel'); // Adiciona a classe editavel
                        });
                    });
                </script>

                <h2>Geral</h2>
                <span class="s"><span class="x"></span></span>
                <div class="espacamento"></div>

                <div id="dados2" class="row">

                    <!-- Nome -->
                    <div class="caixa-detalhes-grande col-lg-12">
                        <label class="txt" for="inputFullname">Nome</label>
                        <input disabled type="text" class="input" name="name" id="inputFullname"
                            value="{{ old('name', $user->name) }}" />
                    </div>

                    <!-- Email -->
                    <div class="caixa-detalhes col-lg-3">
                        <label class="txt" for="inputEmail">E-mail</label>
                        <input disabled type="text" class="input" name="email" id="inputEmail"
                            placeholder="exemplo@gmail.com" value="{{ old('email', $user->email) }}" />
                    </div>

                    <!-- GENERO -->
                    <div class="caixa-detalhes col-lg-2">
                        <label class="txt" for="inputG">Género</label>
                        <select disabled name="genero" id="inputG" class="input">
                            <option value=""> </option>
                            <option value="F" {{ old('genero', $user->genero) == 'F' ? 'selected' : '' }}>Feminino
                            </option>
                            <option value="M" {{ old('genero', $user->genero) == 'M' ? 'selected' : '' }}>Masculino
                            </option>
                            <option value="O" {{ old('genero', $user->genero) == 'O' ? 'selected' : '' }}>Outro
                            </option>
                            <option value="N" {{ old('genero', $user->genero) == 'N' ? 'selected' : '' }}>Prefiro não
                                dizer</option>
                        </select>
                    </div>

                    <!-- Telemovel -->
                    <div class="caixa-detalhes col-lg-3">
                        <label class="txt" for="inputTL">Número de Telemóvel</label>
                        <input disabled type="text" class="input" name="telemovel" id="inputTL"
                            value="{{ old('telemovel', $user->telemovel) }}" />
                    </div>

                    <!-- Data Nascimento -->
                    <div class="caixa-detalhes col-lg-3">
                        <label class="txt" for="inputDN">Data de nascimento</label>
                        <input disabled type="date" class="input" name="data_nascimento" id="inputDN "
                            value="{{ old('data_nascimento', $user->data_nascimento) }}" />
                    </div>
            </form>

        </div>



    </div>

    <div id="pagamentos" data-aos="fade-up" data-aos-anchor="#example-anchor" data-aos-offset="500"
        data-aos-duration="900">

        <h2>Avançado</h2>
        <span class="s"><span class="x"></span></span>
        <div class="espacamento"></div>

        <div class="row">

            <div class="col-md-12">

                <ul class="list-unstyled">
                    <li class="faq-question d-flex" data-target="#faq1">
                        <div class="icon col-lg-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27" viewBox="0 0 30 27"
                                fill="none">
                                <path
                                    d="M24.336 2.05468C23.6769 1.05305 22.6444 0.350421 21.464 0.100226C20.2837 -0.149969 19.0513 0.0725955 18.036 0.719319L2.07603 10.9654C1.06388 11.6175 0.353768 12.6402 0.101097 13.8097C-0.151575 14.9791 0.0737761 16.2001 0.727829 17.2054L5.57883 24.6435C5.90357 25.1424 6.32511 25.5725 6.81897 25.9089C7.31284 26.2452 7.86922 26.4811 8.45583 26.6028C8.77161 26.6723 9.09415 26.7072 9.41763 26.7068C10.2945 26.7055 11.1523 26.4526 11.8872 25.9788L27.8472 15.7328C28.8594 15.0806 29.5695 14.0579 29.8222 12.8885C30.0748 11.719 29.8495 10.498 29.1954 9.49276L24.336 2.05468ZM1.72743 14.1811C1.8069 13.8138 1.9592 13.4659 2.17549 13.1574C2.39178 12.8489 2.66776 12.586 2.98743 12.384L18.9432 2.11708C19.4065 1.81741 19.9481 1.65836 20.5014 1.65948C20.706 1.65965 20.9101 1.68055 21.1104 1.72188C21.4819 1.79613 21.8348 1.94288 22.1485 2.15358C22.4621 2.36427 22.7303 2.63469 22.9374 2.94908L2.13063 16.3068C1.71767 15.679 1.57269 14.9146 1.72743 14.1811ZM28.1874 12.5587C28.108 12.9259 27.9557 13.2739 27.7394 13.5824C27.5231 13.8909 27.2471 14.1538 26.9274 14.3558L10.9716 24.5811C10.6546 24.7874 10.2995 24.9296 9.92674 24.9994C9.55401 25.0693 9.17101 25.0654 8.79978 24.9881C8.42855 24.9108 8.07643 24.7615 7.76367 24.5489C7.45092 24.3362 7.18371 24.0644 6.97743 23.7491L4.26423 19.5891L25.0626 6.22716L27.7842 10.3872C27.992 10.7013 28.1346 11.0532 28.2039 11.4224C28.2731 11.7916 28.2675 12.1708 28.1874 12.5379V12.5587Z"
                                    fill="black" />
                                <path
                                    d="M12.32 19.6432L9.52698 21.4404C9.37643 21.5386 9.26179 21.6823 9.20002 21.85C9.13824 22.0178 9.1326 22.2008 9.18393 22.372C9.23527 22.5432 9.34084 22.6935 9.48506 22.8006C9.62928 22.9078 9.80449 22.9662 9.98478 22.9671C10.1459 22.9681 10.3038 22.9218 10.4384 22.834L13.2356 21.041C13.4227 20.9207 13.554 20.7318 13.6004 20.5157C13.6469 20.2996 13.6048 20.074 13.4834 19.8887C13.362 19.7033 13.1712 19.5733 12.953 19.5273C12.7348 19.4813 12.5071 19.523 12.32 19.6432Z"
                                    fill="black" />
                                <path
                                    d="M19.6951 14.9091L14.6845 18.1248C14.5321 18.2223 14.4156 18.3662 14.3526 18.5347C14.2895 18.7033 14.2833 18.8876 14.3349 19.06C14.3864 19.2323 14.493 19.3835 14.6385 19.4909C14.7841 19.5983 14.9608 19.6561 15.1423 19.6557C15.3047 19.6561 15.4637 19.6098 15.6001 19.5226L20.6107 16.3069C20.7034 16.2473 20.7833 16.1703 20.8459 16.0801C20.9085 15.99 20.9526 15.8885 20.9756 15.7815C20.9986 15.6745 21.0001 15.5641 20.98 15.4565C20.9599 15.3489 20.9186 15.2463 20.8585 15.1546C20.7984 15.0628 20.7206 14.9836 20.6296 14.9216C20.5386 14.8596 20.4362 14.816 20.3281 14.7932C20.2201 14.7704 20.1086 14.7689 20 14.7888C19.8914 14.8087 19.7878 14.8496 19.6951 14.9091Z"
                                    fill="black" />
                            </svg>
                        </div>
                        Metodo de pagamento
                    </li>
                    <div id="faq1" class="faq-answer collapse">
                        <div class="form-group">
                            <select name="metodo_pag" id="inputMP" class="form-control">
                                <option value="">Indefinido </option>
                                <option value="CC"
                                    {{ old('metodo_pag', $user->metodo_pag) == 'CC' ? 'selected' : '' }}>
                                    Cartão de
                                    crédito</option>
                                <option value="TB"
                                    {{ old('metodo_pag', $user->metodo_pag) == 'TB' ? 'selected' : '' }}>
                                    Tranferencia Bancária</option>
                                <option value="RE"
                                    {{ old('metodo_pag', $user->metodo_pag) == 'RE' ? 'selected' : '' }}>
                                    Referencia
                                    Entidade</option>
                            </select>
                        </div>
                    </div>

                    <li class="faq-question d-flex" data-target="#faq4">
                        <div class="icon col-lg-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="37" viewBox="0 0 30 37"
                                fill="none">
                                <path
                                    d="M20.2109 3.04299C19.0339 3.04306 17.8741 3.32226 16.8293 3.85706C15.7846 4.39186 14.8854 5.1666 14.2075 6.11599C13.5297 7.06539 13.093 8.16163 12.9344 9.31235C12.7757 10.4631 12.8997 11.6346 13.2959 12.7281L1.92289 23.9406C1.87424 23.9885 1.8363 24.0458 1.8115 24.1091C1.7867 24.1723 1.77559 24.2399 1.77889 24.3076L1.88389 26.2642C1.89077 26.3878 1.94522 26.5041 2.03611 26.5893C2.127 26.6746 2.24747 26.7224 2.37289 26.723H2.39989L6.50389 26.5868C6.60866 26.5832 6.70956 26.5469 6.79205 26.483C6.87454 26.4192 6.93436 26.3312 6.96289 26.2316L7.43689 24.5326L9.29389 24.1774C9.39124 24.1586 9.48057 24.1113 9.55016 24.0416C9.61976 23.9718 9.66637 23.883 9.68389 23.7867L9.98389 22.1764L11.6879 21.7709C11.7899 21.7465 11.8813 21.6905 11.9488 21.6112C12.0163 21.5318 12.0562 21.4332 12.0629 21.3299L12.1739 19.6071L13.5749 19.4473C13.6766 19.4354 13.772 19.3926 13.8478 19.3247C13.9237 19.2567 13.9761 19.1672 13.9979 19.0684L14.3819 17.3368C14.4509 17.3368 14.5229 17.3368 14.6009 17.3368C15.3688 17.3131 16.1148 17.0783 16.7549 16.659C17.7385 17.1832 18.8306 17.4788 19.9476 17.5233C21.0647 17.5678 22.1773 17.3599 23.2006 16.9156C24.2239 16.4713 25.1308 15.8023 25.8521 14.9595C26.5735 14.1168 27.0902 13.1226 27.3629 12.0529C27.6356 10.9831 27.6571 9.86603 27.4256 8.78685C27.1942 7.70766 26.7161 6.69489 26.0276 5.82577C25.3392 4.95666 24.4586 4.25417 23.4532 3.7719C22.4477 3.28964 21.3439 3.04032 20.2259 3.04299H20.2109ZM20.2109 16.5583C19.0706 16.5546 17.9525 16.2478 16.9739 15.6703C16.8933 15.6235 16.8008 15.6002 16.7073 15.6034C16.6137 15.6065 16.5231 15.6359 16.4459 15.6881C15.9092 16.0933 15.2607 16.3286 14.5859 16.363C14.4491 16.3667 14.3125 16.3497 14.1809 16.3127C14.1131 16.2834 14.0394 16.2695 13.9654 16.2722C13.8914 16.2749 13.819 16.294 13.7535 16.3281C13.6881 16.3623 13.6313 16.4106 13.5873 16.4694C13.5434 16.5282 13.5135 16.5961 13.4999 16.6679L13.0889 18.5238L11.6309 18.6895C11.5162 18.7031 11.41 18.7558 11.3305 18.8385C11.2511 18.9212 11.2035 19.0287 11.1959 19.1424L11.0819 20.9184L9.42289 21.3121C9.33022 21.3341 9.24601 21.3822 9.1805 21.4505C9.115 21.5188 9.07101 21.6044 9.05389 21.6969L8.75389 23.2924L6.92989 23.6416C6.84365 23.6597 6.76391 23.7002 6.699 23.759C6.63409 23.8179 6.58639 23.8929 6.56089 23.9761L6.09889 25.6219L2.84089 25.7314L2.77189 24.4675L14.2169 13.181C14.2855 13.1134 14.3323 13.0274 14.3516 12.9336C14.3708 12.8399 14.3615 12.7427 14.3249 12.6541C13.8106 11.4094 13.7151 10.0347 14.0526 8.73241C14.39 7.43015 15.1426 6.26931 16.1992 5.42095C17.2559 4.5726 18.5609 4.08162 19.9218 4.02038C21.2827 3.95914 22.6275 4.33088 23.7581 5.0808C24.8887 5.83072 25.7452 6.91916 26.2014 8.1857C26.6576 9.45224 26.6894 10.8299 26.292 12.1156C25.8947 13.4013 25.0892 14.527 23.9944 15.3269C22.8995 16.1268 21.5732 16.5585 20.2109 16.5583Z"
                                    fill="black" />
                                <path
                                    d="M19.623 6.27222C19.1827 6.27222 18.7523 6.40103 18.3863 6.64236C18.0202 6.8837 17.7349 7.22672 17.5664 7.62804C17.3979 8.02937 17.3539 8.47097 17.4397 8.89702C17.5256 9.32306 17.7376 9.71441 18.049 10.0216C18.3603 10.3287 18.7569 10.5379 19.1887 10.6227C19.6205 10.7074 20.0681 10.6639 20.4748 10.4977C20.8816 10.3314 21.2292 10.0499 21.4738 9.68875C21.7184 9.32756 21.849 8.90293 21.849 8.46854C21.849 7.88604 21.6144 7.32739 21.197 6.9155C20.7795 6.50361 20.2133 6.27222 19.623 6.27222ZM19.623 9.82422C19.3531 9.82246 19.0897 9.74196 18.866 9.59285C18.6424 9.44373 18.4685 9.23267 18.3661 8.98622C18.2638 8.73978 18.2376 8.46898 18.2909 8.2079C18.3442 7.94682 18.4746 7.70714 18.6657 7.51902C18.8568 7.33091 19.1 7.20277 19.3647 7.15074C19.6294 7.0987 19.9039 7.12511 20.1534 7.22662C20.403 7.32813 20.6165 7.50021 20.7671 7.7212C20.9178 7.94219 20.9988 8.20221 21 8.46854C21.0004 8.64665 20.965 8.82307 20.8958 8.98759C20.8266 9.15212 20.7251 9.30147 20.597 9.427C20.4689 9.55253 20.3169 9.65175 20.1497 9.71892C19.9825 9.78609 19.8035 9.81986 19.623 9.8183V9.82422Z"
                                    fill="black" />
                            </svg>
                        </div>
                        Alterar Password
                    </li>
                    <div id="faq4" class="faq-answer collapse">

                        <div class="caixa-detalhes-grande">
                            <label class="txt" for="inputFullname">Password Antiga <span style="color: red">*</span></label>
                            <input type="text" class="input" name="name" id="inputFullname"
                                value="" />
                        </div>
                        <div class="caixa-detalhes-grande">
                            <label class="txt" for="inputFullname">Password Nova <span style="color: red">*</span></label>
                            <input type="text" class="input" name="name" id="inputFullname"
                                value="" />
                        </div>
                        <div class="caixa-detalhes-grande">
                            <label class="txt" for="inputFullname">Confirmar Password <span style="color: red">*</span></label>
                            <input type="text" class="input" name="name" id="inputFullname"
                                value="" />
                        </div>

                    </div>
                </ul>
                </ul>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/member.js') }}"></script>

    </div>

    <!--<div class="card shadow mb-4">
        <div class="card-header py-3">
            Editar Utilizador
        </div>
        <div class="card-body">

            <form method="POST" action="{{ route('updateperfil', $user) }}" class="form-group" enctype="multipart/form-data">
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
        </div>-->
        <section id="loading">
            <div id="loading-content"></div>
        </section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#exampleModal').modal('show');
        });
    </script>

@endsection
