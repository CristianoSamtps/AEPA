@extends('layouts.master')

@extends('layouts.usertemplate')

@section('title', 'AEPA - Perfil')

@section('styles')
<link href="{{ asset('/css/perfil.css') }}" rel="stylesheet">
@endsection

@section('main-content')


<div class="container-fluid">

    <div class="row justify-content-center" data-aos-anchor-placement="bottom-bottom">

        <div id="profileresume" class="col-sm-12 col-lg-4">

            <div class="imagemperfil" data-aos="zoom-out">
                @if ($user->foto)
                <img src="{{ asset('storage/user_fotos/' . $user->foto) }}" alt="Imagem de perfil">
                @else
                <img src="{{ asset('img/default_user.jpg') }}" alt="Imagem de perfil padrão">
                @endif
            </div>

            <h2> {{ $user->name }} </h2>

            <p>
                @if ($user->tipo == 'M')
                Membro
                @elseif($user->tipo == 'A')
                Admin
                @endif
            </p>

            <a href="{{ route('tornarMembro') }}"><button>Torne-se Membro</button></a>

            <div class="caixa-detalhes">
                <span>Email</span>
                <p> {{ $user->email }} </p></span>
            </div>

            <div class="caixa-detalhes">
                <span>Número de Telemóvel</span>
                <p>{{ $user->telemovel }}</p>
            </div>

            <div class="caixa-detalhes">
                <span>Género</span>
                <p id="genero">
                    @if ($user->genero == 'M')
                    Masculino
                    @elseif($user->genero == 'F')
                    Feminino
                    @elseif($user->genero == 'O')
                    Outro
                    @else
                    {{ $user->genero }}
                    @endif
                </p>
            </div>
        </div>

        <div id="projetos" class="col-sm-12 col-lg-8" data-aos-anchor-placement="bottom-bottom">

            <!--SECÇÃO DOS PROJETOS-->
            <div id="projet" class="row">
                @if (count($projetos) > 0)
                @foreach ($projetos->take(3) as $projeto)
                <div id="exprojeto" class="col-sm-12 col-xl-4">
                    <a style="text-decoration: none; display: contents; width: 100%;" href="{{ route('project_details', ['projeto' => $projeto]) }}">

                        <div class="fundo-projeto">
                            @if ($projeto->fotografias)
                            <img src="{{ asset('storage/project_photos/' . $projeto->fotografias->first()->foto) }}" alt="Imagem do projeto" class="img-post">
                            @else
                            <img src="{{ asset('storage/event_photos/unnamed.jpg') }}" alt="Imagem do projeto">
                            @endif
                        </div>
                        <div class="info-projeto">
                            <h1>{{ $projeto->titulo }}</h1>
                            <!-- Adicione outras informações do projeto conforme necessário -->
                            <button class="buttonjoin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                    <path d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z" fill="white" />
                                </svg>
                            </button>
                        </div>
                </div>
                @endforeach
                @else
                <div id="semprojeto" class="col-lg-12">
                    <div class="fundo-projeto text-center">
                        <p>Não está a participar em nenhum projeto..</p>
                    </div>
                </div>
                @endif
            </div>

            <!--SECÇÃO DAS DOAÇÕES-->
            <div class="row" data-aos="fade-up" data-aos-anchor-placement="center-bottom">

                <div id="resumedoacoes" class="col-lg-12">
                    <h2>Últimas Doações</h2>
                    <span><span class="x"></span></span>
                    <div class="espacamento"></div>
                    @if ($user->doacoes && count($user->doacoes) > 0)
                    {{-- dd($user->donation); --}}
                    @foreach ($doacoes->sortByDesc('created_at')->take(6) as $doacao)
                    <div class="resumo d-flex">

                        <div class="data col-lg-1">
                            <h1>{{ $doacao->created_at->day }}</h1>
                            <p>{{ $doacao->created_at->translatedFormat('M') }}</p>
                        </div>

                        <div class="nome col-lg-7">
                            <h1>{{ $doacao->title }}</h1>
                            <p>{{ $doacao->created_at->format('h:iA') }}</p>
                        </div>

                        @if ($doacao->projeto_id)
                        <div class="projeto col-lg-1">
                            <a href="{{ route('project_details', ['projeto' => $doacao->projeto_id]) }}">

                                <span class="tooltip">Clique para ver detalhes do projeto</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                    <path d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z" fill="gray" />
                                </svg>

                            </a>
                        </div>
                        @else
                        <div class="projeto col-lg-1"></div>
                        @endif

                        <div class="estado col-lg-2" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="800">
                            <button class="info @if ($doacao->anonimo == 'S') anonimo @else nao-anonimo @endif">
                                @if ($doacao->anonimo == 'N')
                                Visivel
                                @elseif($doacao->anonimo == 'S')
                                Anônimo
                                @endif
                            </button>
                        </div>

                        <div class="valor col-lg-1">
                            <h1>{{ $doacao->valor }}€</h1>
                        </div>

                    </div>
                    @endforeach
                    @else
                    <div id="semdoacao" data-aos="fade-down" class="col-lg-12">

                        <p>Nenhuma doação encontrada!</p>

                    </div>
                    @endif
                </div>

            </div>

        </div>

    </div>

</div>

@endsection