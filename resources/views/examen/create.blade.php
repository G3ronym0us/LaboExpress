@extends('layouts.admin')
@section('contenido')
	
	<div class="container">
		<div class="row">
			<div class="col">
				<h3>Nuevo Cliente</h3>
			</div>
		</div>

		<form method="POST" action="{{url('examen')}}">
		@csrf

		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label for="nombre">Nombres</label>
					<input type="text" name="nombre" class="form-control">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label for="descripcion">Descripción</label>
					<input type="text" name="descripcion" class="form-control">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label for="costo">Costo</label>
					<input type="text" name="costo" class="form-control">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
				</div>
			</div>

		</div>

	</div>

	</form>

@endsection