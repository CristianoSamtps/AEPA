@extends('layouts.admin')

@section("title")
    Editar evento
@endsection

@section('backoffice-content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Editar evento
        </div>
        <div class="card-body">

			<form method="POST" action="{{ route('admin.fotografias.update',[$event,$photo])}}" class="form-group inline">
                @csrf
                @method("PUT")
				@include('_admin.fotografiasEvento.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>

					<a href="{{route('admin.fotografias.index',$event)}}" class="btn btn-default">Cancelar</a>

				</div>

			</form>

		</div>
	</div>
</div>
@endsection
