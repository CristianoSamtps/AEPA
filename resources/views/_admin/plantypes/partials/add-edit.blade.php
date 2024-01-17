<div class="form-group">
    <label for="inputName">Nome do Plano</label>
    <input type="text" class="form-control" name="name" id="inputName" value="{{ old('name', $planType->name ?? '') }}"
        required>
</div>
<div class="form-group">
    <label for="inputDuracao">Duração (em meses)</label>
    <input type="text" class="form-control" name="duracao" id="inputDuracao"
        value="{{ old('duracao', $planType->duracao ?? '') }}" />
</div>
<div class="form-group">
    <label for="inputValor">Valor</label>
    <input type="number" class="form-control" name="valor" id="inputValor" step="0.01"
        value="{{ old('valor', $planType->valor ?? '') }}" />
</div>
