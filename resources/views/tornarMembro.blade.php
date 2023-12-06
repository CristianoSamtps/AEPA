@extends('layouts.master')


@section('title', 'AEPA')

@section('title', 'AEPA | Membro')


@section('styles')
    <link href="{{ asset('/css/styleR.css') }}" rel="stylesheet">
@endsection

@section('main')
    <div class="container">
        <div class="pricing-header">
            <h1>Torna-te Membro</h1>
            <div class="pricing-switch">
                <small>Poupa 10% com o plano anual</small>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Mensal</h5>
                        <p class="price text-center">4.99<span class="currency">€</span></p>
                        <p class="features text-center">4.99€/mês<br></p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-success btn-custom">Subscrever</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">3 Meses</h5>
                        <p class="price text-center">12.99<span class="currency">€</span></p>
                        <p class="features text-center">4.33€/mês<br></p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-success btn-custom">Subscrever</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Anual</h5>
                        <p class="price text-center">34.99<span class="currency">€</span></p>
                        <p class="features text-center">2.91€/mês<br></p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-success btn-custom">Subscrever</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-section">
        <div class="container">
            <h2>Vantagens</h2>
            <div class="row " data-aos="fade-left">
                <!-- Feature 1 -->
                <div class="col-md-4 feature-item">
                    <i class="fa-solid fa-2x fa-globe" style="color: #ffffff; width: 300px;"></i>
                    <h3>Comunidade</h3>
                    <p>Faz comentários e sugestões na nossa comunidade e ajuda-nos a tornar o Mundo num lugar Melhor.</p>
                </div>
                <!-- Feature 2 -->
                <div class="col-md-4  feature-item">
                    <i class="fa-solid fa-2x fa-calendar-days" style="color: #ffffff;"></i>
                    <h3>Eventos</h3>
                    <p>Recebe notificações antecipadas sobre eventos e projetos.</p>
                </div>
                <!-- Feature 3 -->
                <div class="col-md-4 feature-item">
                    <i class="fa-solid fa-2x fa-bag-shopping" style="color: #ffffff;"></i>
                    <h3>Loja Online</h3>
                    <p>Recebe um Cupão Mensal na Loja Online da AEPA.</p>
                </div>
            </div>

        </div>

        <div class="stats">
            <div class="container">
                <div class="row" data-aos="fade-right">
                    <div class="col-md-3">
                        <div class="cardTwo row">
                            <div class="col-md-4">
                                <i class="fa-solid fa-2x fa-user"
                                    style="color: #ffffff; padding: 20px; margin-bottom: 20px;"></i>
                            </div>
                            <div class="col-md-6" style="text-align: left;">
                                <h4 class="hhhh">Membros</h4>
                                <h4>+ 2500</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="cardTwo row">
                            <div class="col-md-4">
                                <i class="fa-solid fa-2x fa-money-check-dollar"
                                    style="color: #ffffff; padding: 20px; margin-bottom: 20px;"></i>
                            </div>
                            <div class="col-md-8">
                                <h4 class="hhhh">Angariado</h4>
                                <h4>+ 2500€</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="cardTwo row">
                            <div class="col-md-4">
                                <i class="fa-solid fa-2x fa-comment"
                                    style="color: #ffffff; padding: 20px; margin-bottom: 20px;"></i>
                            </div>
                            <div class="col-md-8">
                                <h4 class="hhhh">Sugestões</h4>
                                <h4>+150</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="questions">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Perguntas Frequentes</h2>
                </div>
                <div class="col-md-5">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item ">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        AOS.init();
    </script>
@endsection
