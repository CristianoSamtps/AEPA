@extends('layouts.admin')

@section('backoffice-content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Editar sugestão
        </div>
        <div class="card-body">

			<form method="POST" action="{{ route('admin.sugestoes.update',$sugestao)}}" class="form-group inline">
                @csrf
                @method("PUT")
				@include('_admin.sugestoes.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>
					<a href="{{route('admin.sugestoes.index')}}" class="btn btn-default">Cancelar</a>
				</div>

			</form>

		</div>
	</div>
</div>


@endsection
