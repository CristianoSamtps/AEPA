@extends('layouts.master')


@section('title', 'AEPA')

@section('title', 'AEPA | Membro')


@section('styles')
    <link href="{{ asset('/css/stylePagamento.css') }}" rel="stylesheet">
@endsection

@section('main')

    <div class="pagamento">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>
                        Pagamento
                    </h1>
                    @if (isset($planoSelecionado))
                        <h2>Plano Selecionado: {{ $planoSelecionado->name }}</h2>
                        <p>Preço: {{ number_format($planoSelecionado->valor, 2) }}€</p>
                    @endif

                    <form id="payment-form" action="{{ route('submit.payment') }}" method="POST">
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
                        <button type="submit" class="btn btn-primary w-100 mt-2">Confirmar</button>
                    </form>
                </div>
                <div class="col-md-5">
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
                        <div class="card" id="cartao" data-aos="fade-up">
                            <div class="card-body">
                                <!-- Form -->
                                <form>
                                    <div class="mb-3">
                                        <label for="nameOnCard" class="form-label">Nome do Cartão</label>
                                        <input type="text" class="form-control" id="nameOnCard"
                                            placeholder="Nome Apelido">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cardNumber" class="form-label">Numero do Cartão</label>
                                        <input type="text" class="form-control" id="cardNumber"
                                            placeholder="1111 2222 3333 4444">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="expirationDate" class="form-label">Data Expiração</label>
                                            <input type="text" class="form-control" id="expirationDate"
                                                placeholder="10/2020">
                                        </div>
                                        <div class="col">
                                            <label for="cvv" class="form-label">CVV</label>
                                            <input type="text" class="form-control" id="cvv" placeholder="123">
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
                                            placeholder="Nome Apelido">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cardNumber" class="form-label">Apple ID</label>
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
