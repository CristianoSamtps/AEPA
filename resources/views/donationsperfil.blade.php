@extends('layouts.master')

@extends('layouts.usertemplate')

@section('title', 'AEPA - Doações')

@section('styles')
<link href="{{ asset('/css/donationsperfil.css') }}" rel="stylesheet">

@endsection

@section('main-content')

<div class="row" data-aos="fade-left" data-aos-anchor-placement="center-bottom">

    <a href="{{ route('doacoes') }}">
        <div id="novadoacao" data-aos="fade-down" class="col-lg-12">

            <i class="fa-solid fa-circle-plus"></i>

        </div>
    </a>

    <!-- Área dos filtros -->
    <div id="filtro-doacoes" class="col-lg-12">

        <form method="get" action="{{ route('user.doacoes', $user) }}">

            <div class="row" style="justify-content: right">

                <div class="col-sm-12 col-lg-3 caixa-filtro">

                    <select name="data" class="input">
                        <option value="">Data:</option>
                        <option value="recentes">Recentes</option>
                        <option value="antigas">Antigas</option>
                    </select>

                </div>

                <div class="col-sm-12 col-lg-3 caixa-filtro">

                    <select name="preco" class="input">
                        <option value="">Preço:</option>
                        <option value="desc">Descendente</option>
                        <option value="asc">Ascendente</option>
                    </select>
                </div>

                <div class="col-sm-12 col-lg-3 caixa-filtro">

                    <select name="visibilidade" class="input">
                        <option value="">Estado:</option>
                        <option value="anonimo">Anônimo</option>
                        <option value="nao-anonimo">Não Anônimo</option>
                    </select>
                </div>

                <div class="col-sm-12 col-lg-3 caixa-botao">

                    <button type="submit">Filtrar</button>

                </div>

            </div>
        </form>
    </div>



    <div id="resumedoacoes" class="col-lg-12">
        <h2>Últimas Doações</h2>
        <span><span class="x"></span></span>
        <div class="espacamento"></div>
        @if ($user->doacoes && count($user->doacoes) > 0)
        {{-- dd($user->donation); --}}
        @foreach ($doacoes->take(10) as $doacao)
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
                    </span>
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



@endsection