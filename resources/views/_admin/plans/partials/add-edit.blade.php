<form method="POST" action="{{ route('admin.plans.update', $plan->id) }}" class="form-group">
    @csrf
    @method('PUT')

    {{-- Campo de seleção para Tipo de Plano --}}
    <div class="form-group">
        <label for="inputPlanType">Tipo de Plano</label>
        <select class="form-control" name="planType_id" id="inputPlanType">
            @foreach ($plantypes as $type)
                <option value="{{ $type->id }}" {{ $plan->planType_id == $type->id ? 'selected' : '' }}>
                    {{ $type->name }}</option>
            @endforeach
        </select>
    </div>

    {{-- Informações sobre o Member Doner --}}
    <div class="form-group">
        <label>ID do Membro Doador</label>
        <input type="text" class="form-control" value="{{ $plan->member_doner->id }}" readonly>
    </div>
    <div class="form-group">
        <label>Nome do Membro Doador</label>
        <input type="text" class="form-control"
            value="{{ $plan->member_doner->user->name ?? 'Nome não disponível' }}" readonly>
    </div>
</form>

