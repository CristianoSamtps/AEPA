@extends('layouts.master')


@section('title', 'AEPA')

@section('title', 'AEPA | Membro')


@section('styles')
    <link href="{{ asset('/css/stylePagamento.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styleIndex.css') }}" rel="stylesheet">
@endsection

@section('main')

    <div class="pagamento">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        Pagamento
                    </h1>
                    @if (isset($planoSelecionado))
                        <div class="caixa">
                            <a href="{{ route('tornarMembro') }}" class="fechar-caixa">&times;</a>
                            <div class="container">
                                <h4>Detalhes do Pagamento</h4>
                                <br>
                                <p><span> Plano Selecionado: </span>{{ $planoSelecionado->name }}</p>
                                <p><span> Preço: </span>{{ number_format($planoSelecionado->valor, 2) }}€</p>
                                <p><span> Nome: </span> {{ $user->name }}</p>
                            </div>
                        </div>
                    @endif

                    <form type="hidden" id="payment-form"  action="{{ route('submit.payment') }}" method="POST">
                        @csrf
                        <input type="hidden" name="plano_id" value="{{ $planoSelecionado->id }}">
                        <input type="hidden" name="member_doner_id" value="{{ $user->id }}">

                        <div class="form-group">
                            <label>Nome do Usuário</label>
                            <input type="text" class="form-control" value="{{ $user->name }}" readonly>
                        </div>

                        <div class="form-group">
                            <label>Nome do Plano</label>
                            <input type="text" class="form-control" value="{{ $planoSelecionado->name }}" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary w-50 mt-2">Confirmar</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="container my-4">
                        <h5 class="card-title text-center">Selecionar Metodo de Pagamento</h5>
                        <br>
                        <!-- Card Type Selection -->
                        <div class="text-center mb-3">
                            <!-- You can use actual images or icons for Visa, MasterCard, etc. -->
                            <button class="btn btn-success">Cartão</button>
                            <button class="btn">Apple Pay</button>
                            <button class="btn">MBWay</button>
                            <button class="btn">PayPal</button>
                        </div>
                        <div class="card" id="cartao"  action="{{ route('submit.payment') }}" method="POST" data-aos="fade-up">
                            <div class="card-body">
                                <!-- Form -->
                                <form>
                                    <div class="mb-3">
                                        <label for="nameOnCard" class="form-label">Nome do Cartão</label>
                                        <input type="text" class="form-control" id="nameOnCard"
                                            placeholder="Nome Apelido" pattern="^[a-zA-Z\s-]+$" required title="Insira o nome como aparece no cartão.">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cardNumber" class="form-label">Numero do Cartão</label>
                                        <input type="text" class="form-control" id="cardNumber"
                                            placeholder="1111 2222 3333 4444" pattern="\d{4}\s?\d{4}\s?\d{4}\s?\d{4}" required title="Insira um número de cartão de crédito válido.">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="expirationDate" class="form-label">Data Expiração</label>
                                            <input type="text" class="form-control" id="expirationDate"
                                                placeholder="10/2020" pattern="(0[1-9]|1[0-2])\/?([0-9]{2})" required title="Insira a data de expiração no formato MM/AA.">
                                        </div>
                                        <div class="col">
                                            <label for="cvv" class="form-label">CVV</label>
                                            <input type="text" class="form-control" id="cvv" placeholder="123" pattern="\d{3,4}" required title="Insira um CVV válido.">
                                        </div>
                                    </div>


                                    <!-- Price Details -->
                                    <div class="mt-4">
                                        <p>Total: {{ number_format($planoSelecionado->valor, 2) }}€</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card" id="applePay" data-aos="fade-up">
                            <div class="card-body">
                                <!-- Form -->
                                <form>
                                    <div class="mb-3">
                                        <label for="nameOnCard" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="nameOnCard"
                                            placeholder="Nome Apelido" pattern="^[a-zA-Z\s-]+$" required title="Insira seu nome e sobrenome.">
                                    </div>
                                    <div class="mb-3">
                                        <label for="appleID" class="form-label">Apple ID</label>
                                        <input type="email" class="form-control" id="cardNumber"
                                        required placeholder="exemplo@email.com" title="Insira um endereço de e-mail válido.">
                                    </div>
                                    <!-- Price Details -->
                                    <div class="mt-4">
                                        <p>Total: {{ number_format($planoSelecionado->valor, 2) }}€</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card" id="mbWay" data-aos="fade-up">
                            <div class="card-body">
                                <!-- Form -->
                                <form>
                                    <div class="mb-3">
                                        <label for="nameOnCard" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="nameOnCard"
                                            placeholder="Nome Apelido">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cardNumber" class="form-label">Nº Telémovel</label>
                                        <input type="text" class="form-control" id="cardNumber" placeholder="999999999">
                                    </div>
                                    <!-- Price Details -->
                                    <div class="mt-4">
                                        <p>Total: {{ number_format($planoSelecionado->valor, 2) }}€</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card" id="payPal" data-aos="fade-up">
                            <div class="card-body">
                                <!-- Form -->
                                <form>
                                    <div class="mb-3">
                                        <label for="nameOnCard" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="nameOnCard"
                                            placeholder="Nome Apelido">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cardNumber" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="cardNumber"
                                            placeholder="exemplo@email.com">
                                    </div>
                                    <!-- Price Details -->
                                    <div class="mt-4">
                                        <p>Total: {{ number_format($planoSelecionado->valor, 2) }}€</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/payment.js') }}"></script>

@section('scripts')
    <script>
        document.getElementById('confirmar-pagamento').addEventListener('click', function() {
            var form = document.getElementById('payment-form');
            form.submit();
        });
    </script>
@endsection

@endsection
