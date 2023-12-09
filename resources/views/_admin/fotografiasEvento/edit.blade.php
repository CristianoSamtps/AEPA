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

			<form method="POST" action="{{ route('admin.eventos.update',$event)}}" class="form-group inline">
                @csrf
                @method("PUT")
				@include('_admin.evento.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>

					<a href="{{route('admin.eventos.index')}}" class="btn btn-default">Cancelar</a>

				</div>

			</form>

		</div>
	</div>
</div>
@endsection
