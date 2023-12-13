<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" name="name" id="inputName"
        value="{{ old('name', $plantypes->name ?? '') }}" />
</div>
<div class="form-group">
    <label for="inputDuracao">Duração</label>
    <input type="text" class="form-control" name="duracao" id="inputDuracao"
        value="{{ old('duracao', $plantypes->duracao ?? '') }}" />
</div>
<div class="form-group">
    <label for="inputValor">Valor</label>
    <input type="number" class="form-control" name="valor" id="inputValor" step="0.01"
        value="{{ old('valor', $plantypes->valor ?? '') }}" />
</div>
<div class="form-group">
    <label for="inputProximoPag">Próximo Pagamento</label>
    <input type="date" class="form-control" name="proximo_pag" id="inputProximoPag"
        value="{{ old('proximo_pag', isset($plantypes) ? $plantypes->proximo_pag->format('Y-m-d') : '') }}" />
</div>
