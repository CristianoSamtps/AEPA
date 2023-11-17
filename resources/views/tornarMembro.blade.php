@extends('layouts.master')


@section('title', 'AEPA')

@section('title', 'AEPA | Membro')


@section('styles')
    <link href="{{ asset('/css/styleR.css') }}" rel="stylesheet">
@endsection

@section('main')
    <section class="tornateMembro">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="titleMembro">Torna te Membro</h2>
                    <p class="descricaoMembro">Junta te a nós e torna te membro da Comunidade da AEPA.
                        <span class="membro">“ Membro ”</span> é uma subscrição mensal onde todos os lucros vão financiar os
                        eventos da AEPA.
                    </p>
                    <button class="butaoMembro btn-success">Tornar Membro</button>
                </div>
                <div class="col-md-6">
                    <img class="imgMembro" src="{{asset ('img/vetormembro.png')}}" alt="Imagem" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>

    <section class="preco">
        <h2 class="titlePreco">Subscrição</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header" id="header1">
                            <h4 class="my-0 font-weight-normal">MAIS POPULAR</h4>
                        </div>
                        <div class="card-body text-center">
                            <h1>Mensal</h1>
                            <h1 class="card-title pricing-card-title">4.99€</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="pormes">4.99€ <small class="text-muted">/ mês</small></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header" id="header2">

                        </div>
                        <div class="card-body text-center">
                            <h1>3 Meses</h1>
                            <h1 class="card-title pricing-card-title">12.99€</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="pormes">$25 <small class="text-muted">/ mês</small></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header" id="header3">
                            <h4 class="my-0 font-weight-normal">MELHOR OFERTA</h4>
                        </div>
                        <div class="card-body text-center">
                            <h1>Anual</h1>
                            <h1 class="card-title pricing-card-title">34.99€</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="pormes">$25 <small class="text-muted">/ mês</small></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vantagens">
        <h1 class="titleVan">Vantagens</h1>
        <div class="container">
            <div class="row vantagens">
                <div class="col-md-6">
                    <h2 class="tituloNormal">Normal</h2>
                    <ul class="listaNormal">
                        <li>Fazer Doações</li>
                        <li>Inscrição em Voluntariado</li>
                        <li>Visualizar sugestões e <br> votar na comunidade</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2 class="subtituloMembro">Membro</h2>
                    <ul class="listaNormal">
                        <li>Fazer Doações</li>
                        <li>Inscrição em Voluntariado</li>
                        <li>Visualizar sugestões e <br> votar na comunidade</li>
                    </ul>
                    <ul class="listaMembro">
                        <li>Aviso antecipado sobre eventos</li>
                        <li>Submeter sugestões <br> na comunidade</li>
                        <li>Cupão mensal na <br> Loja Online</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

