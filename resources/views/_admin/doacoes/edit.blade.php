@extends('layouts.admin')

@section('backoffice-content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Editar doação
        </div>
        <div class="card-body">

			<form method="POST" action="{{ route('admin.doacoes.update',$doacao)}}" class="form-group inline">
                @csrf
                @method("PUT")
				@include('_admin.doacoes.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>
					<a href="{{route('admin.doacoes.index')}}" class="btn btn-default">Cancelar</a>
				</div>

			</form>

		</div>
	</div>
</div>


@endsection
