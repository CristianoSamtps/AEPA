<div class="form-group">
    <label for="inputDate">Data</label>
    <input type="date" class="form-control" name="date" id="inputDate"
        value="{{ old('date', isset($plan) ? $plan->date->format('Y-m-d') : '') }}" />
</div>
<div class="form-group">
    <label for="inputMetodoPag">Método de Pagamento</label>
    <input type="text" class="form-control" name="metodo_pag" id="inputMetodoPag"
        value="{{ old('metodo_pag', $plan->metodo_pag ?? '') }}" />
</div>
<div class="form-group">
    <label for="inputProximoPag">Próximo Pagamento</label>
    <input type="date" class="form-control" name="proximo_pag" id="inputProximoPag"
        value="{{ old('proximo_pag', isset($plan) ? $plan->proximo_pag->format('Y-m-d') : '') }}" />
</div>

<div class="form-group">
    <label for="inputPlanType">Tipo de Plano</label>
    <select class="form-control" name="planType_id" id="inputPlanType">
        @foreach ($plantypes as $plantypes)
            <option value="{{ $planType->id }}"
                {{ (isset($plan) && $plan->plantypes === $plantypes->id) ? 'selected' : '' }}>
                {{ $plantypes->name }}</option>
        @endforeach
    </select>
</div>
