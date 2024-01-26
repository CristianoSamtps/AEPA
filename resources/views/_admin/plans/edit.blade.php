@extends('layouts.admin')

@section("title")
Editar Subscrições
@endsection

@section('backoffice-content')
<div class="container-fluid">
     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Editar Subscrições
        </div>
        <div class="card-body">
			<form method="POST" action="{{ route('admin.plans.update', $plan->id) }}" class="form-group">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="inputPlanType">Tipo de Plano</label>
                    <select class="form-control" name="planType_id" id="inputPlanType">
                        @foreach ($plantypes as $type)
                            <option value="{{ $type->id }}" {{ $plan->planType_id == $type->id ? 'selected' : '' }}>
                                {{ $type->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>ID do Membro Doador</label>
                    <input type="text" class="form-control" value="{{ $plan->member_doner->id }}" readonly>
                </div>
                <div class="form-group">
                    <label>Nome do Membro Doador</label>
                    <input type="text" class="form-control"
                        value="{{ $plan->member_doner->user->name ?? 'Nome não disponível' }}" readonly>
                </div>

				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>
					<a href="{{route('admin.plans.index')}}" class="btn btn-default">Cancelar</a>
				</div>

			</form>
		</div>
	</div>
</div>
@endsection
