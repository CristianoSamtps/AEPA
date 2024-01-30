<div id="modal-container">
    <div id="modalD">
        <form action=" {{ route('registardoacao', $projeto ?? null) }} " id="doacaoform" method='POST'>
            @csrf
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Nova Doação</h2>

            @if (($projeto ?? null) == null)
                <div>
                    <label for="projeto">Projeto a doar</label>

                    <select name="projeto" id="projeto">
                        <option value="">Não quero doar para um projeto em específico</option>
                        @foreach ($projetos as $projeto)
                            <option value="{{ $projeto->id }}" {{ old('projeto') == $projeto->id ? 'selected' : '' }}>
                                {{ $projeto->titulo }}</option>
                        @endforeach

                    </select>
                    @error('projeto')
                        <div class="text-danger"> {{ $message }}</div>
                    </div>
                @enderror
            @endif
            <label for="anonimo">Anônimo?</label>
            <select name="anonimo" id="anonimo">
                <option value="N" {{ old('anonimo') == 'N' ? 'selected' : '' }}>Não</option>
                <option value="S" {{ old('anonimo') == 'S' ? 'selected' : '' }}>Sim</option>
            </select>
            @error('anonimo')
                <div class="text-danger"> {{ $message }}</div>
            @enderror

            <label for="anonimo">Valor a doar</label>
            <input type="integer" name="valor" id="valor" value="{{ old('valor') }}">
            @error('valor')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
            <input type="text" name="title" id="mens" placeholder="Digite uma mensagem..."
                value={{ old('title') }}>
            @error('title')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
            <label for="metodo_pagamento">Método de Pagamento:</label>
            <select name="metodo_pag" id="metodo_pagamento" onchange="showFields()">
                <option value="">Selecione uma opção:</option>
                <option value="C" {{ old('metodo_pag') == 'C' ? 'selected' : '' }}>Cartão Multibanco</option>
                <option value="R" {{ old('metodo_pag') == 'R' ? 'selected' : '' }}>Transferencia Bancaria</option>
                <option value="M" {{ old('metodo_pag') == 'M' ? 'selected' : '' }}>MB WAY</option>
            </select>
            @error('metodo_pag')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
            <div id="C_fields" style="display: none;">
                <label for="numero_cartao">Nº do Cartão:</label>
                <input type="text" name="num_cartao" id="numero_cartao" placeholder="XXXXXXXXXXXXXXXX"
                    value="{{ old('num_cartao') }}">

                <label for="data_validade">Data de Validade:</label>
                <input type="text" name="data_cartao" id="data_validade" placeholder="MM/AA"
                    value="{{ old('data_cartao') }}">

                <label for="cvv">CVV:</label>
                <input type="text" name="cvv_cartao" id="cvv" placeholder="XXX"
                    value="{{ old('cvv_cartao') }}">
            </div>

            <!-- Campo específico para Referência Multibanco -->
            <div id="referencia_multibanco_fields" style="display: none;">
                <!-- Adicione aqui lógica para gerar a referência automaticamente no backend -->
                <input type="text" name="referencia" id="referencia" placeholder="PT50XXXXXXXXXXXXXXXXXXXXX"
                    value="{{ old('referencia') }}">
            </div>

            <!-- Campo específico para MB WAY -->
            <div id="mbway_fields" style="display: none;">
                <label for="numero_telemovel">Número de Telemóvel:</label>
                <input type="text" name="num_tel" id="numero_telemovel" placeholder="Número de Telemóvel"
                    value="{{ old('num_tel') }}">
            </div>
            @error('num_cartao')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
            @error('cvv_cartao')
                <div class="text-danger"> {{ $message }}</div>
            @enderror
            <button type="submit">Enviar Doação</button>
        </form>
    </div>
</div>
