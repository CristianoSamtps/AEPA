<div class="form-group">
    <label for="inputDate">Data</label>
    <input type="date" class="form-control" name="date" id="inputDate"
        value="{{ old('date', isset($planType) ? $planType->date->format('Y-m-d') : '') }}" />
</div>
<div class="form-group">
    <label for="inputProximoPag">Próximo Pagamento</label>
    <input type="date" class="form-control" name="proximo_pag" id="inputProximoPag"
        value="{{ old('proximo_pag', isset($planType) ? $planType->proximo_pag->format('Y-m-d') : '') }}" />
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
