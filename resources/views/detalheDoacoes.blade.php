@extends('layouts.master')

@section('title', 'AEPA')


@section('styles')
    <link href="{{ asset('/css/styleG.css') }}" rel="stylesheet">
@endsection

@section('main')

    <main id="main">
        <section class="detalhesDoacao">

            <div class="bannerD">
                <img src="{{ asset('img/praia.svg') }}" alt="">
            </div>
            <div class="card">
                <div class="titulo">
                    <h4>{{ $projeto->titulo }}</h4>
                </div>
                <div class="bar">
                    <div class="per"
                        style="max-width:{{ ($projeto->donations()->sum('valor') * 100) / $projeto->objetivos }}%">
                    </div>
                    <div class="texto-per">
                        <span>{{ $projeto->donations()->sum('valor') }}€ <span id="cinza">angariados<span> </span>
                                <span id="cinza"
                                    class="perc">{{ ($projeto->donations()->sum('valor') * 100) / $projeto->objetivos }}%</span>
                    </div>
                </div>
            </div>
            <div class="content">
                <h4>Descrição</h4>
                <p>{{ $projeto->descricao }}</p>
                @auth
                <button>
                    <a href="#" onclick="openModal()">
                        <h4>Doar agora</h4>
                    </a>
                </button>
                @endauth
            </div>




            <!--
                            <div class="card">
                                <div class="esq">
                                    <img src="{{ asset('img/praia.svg') }}" alt="">
                                </div>
                                <div class="dir">
                                    <h4>Plantação da mata de Leiria</h4>
                                    <div class="bar">
                                        <div class="per"></div>
                                        <div class="texto-per">
                                            <span>100 € <span id="cinza">angariados<span> </span>
                                                    <span id="cinza" class="perc">20%</span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        <div class="paginas">
                            <ul>
                                <li class="link" value="1">1</li>
                                <li class="link" value="2">2</li>
                                <li class="link" value="3">3</li>
                            </ul>
                        </div>
            -->
            </div>
            </div>
        </section>
    </main>
    <div id="modal-container">
        <div id="modalD">
            <form action="{{-- {{ route('registardoacao', $doacao) }} --}}" id="doacaoform" method='POST'>
                @csrf
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Nova Doação</h2>
                <label for="anonimo">Anônimo?</label>
                <select name="anonimo" id="anonimo">
                    <option value="1">Não</option>
                    <option value="0">Sim</option>
                </select>
                <label for="anonimo">Valor a doar</label>
                <input type="integer" name="valor" id="valor"></textarea>

                <input type="text" name="mens" id="mens" placeholder="Digite uma mensagem..."></textarea>

                <label for="metodo_pagamento">Método de Pagamento:</label>
            <select name="metodo_pagamento" id="metodo_pagamento" onchange="showFields()">
                <option value="nada">Selecione uma opção:</option>
                <option value="cartao_multibanco">Cartão Multibanco</option>
                <option value="referencia_multibanco">Referência Multibanco</option>
                <option value="mbway">MB WAY</option>
            </select>
                <div id="cartao_multibanco_fields" style="display: none;">
                    <label for="numero_cartao">Nº do Cartão:</label>
                    <input type="text" name="numero_cartao" id="numero_cartao" placeholder="XXXX-XXXX-XXXX-XXXX" required>

                    <label for="data_validade">Data de Validade:</label>
                    <input type="text" name="data_validade" id="data_validade" placeholder="MM/AA" required>

                    <label for="cvv">CVV:</label>
                    <input type="text" name="cvv" id="cvv" placeholder="XXX" required>
                </div>

                <!-- Campo específico para Referência Multibanco -->
                <div id="referencia_multibanco_fields" style="display: none;">
                    <!-- Adicione aqui lógica para gerar a referência automaticamente no backend -->
                    <p>Referência será gerada automaticamente ao enviar a doação.</p>
                </div>

                <!-- Campo específico para MB WAY -->
                <div id="mbway_fields" style="display: none;">
                    <label for="numero_telemovel">Número de Telemóvel:</label>
                    <input type="text" name="numero_telemovel" id="numero_telemovel" placeholder="Número de Telemóvel" required>
                </div>
                <button onclick="submitSuggestion()">Enviar Doação</button>
            </form>
        </div>
    </div>

@endsection
@section('moreScripts')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function openModal() {
            $("#modal-container").fadeIn();
        }

        function closeModal() {
            $("#modal-container").fadeOut();
        }

        function showFields() {
        var metodoPagamento = document.getElementById("metodo_pagamento").value;

        // Oculta todos os campos específicos
        document.getElementById("cartao_multibanco_fields").style.display = "none";
        document.getElementById("referencia_multibanco_fields").style.display = "none";
        document.getElementById("mbway_fields").style.display = "none";

        // Exibe os campos específicos do método de pagamento selecionado
        if (metodoPagamento === "cartao_multibanco") {
            document.getElementById("cartao_multibanco_fields").style.display = "block";
        } else if (metodoPagamento === "referencia_multibanco") {
            document.getElementById("referencia_multibanco_fields").style.display = "block";
        } else if (metodoPagamento === "mbway") {
            document.getElementById("mbway_fields").style.display = "block";
        }
    }

    </script>
@endsection
