@extends('layouts.admin')
@section('contenido')
	
	<div class="container">
		<div class="row">
			<div class="col">
				<h3>Nuevo Cliente</h3>
			</div>
		</div>

		<form method="POST" action="{{url('paciente')}}">
		@csrf

		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label for="nombres">Nombres</label>
					<input type="text" name="nombres" class="form-control">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label for="apellidos">Apellidos</label>
					<input type="text" name="apellidos" class="form-control">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label for="cedula">Cedula</label>
					<input type="text" name="cedula" class="form-control">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label for="sexo">Sexo</label>
					<input type="text" name="sexo" class="form-control">
				</div>
			</div>
			<div class="col-8">
				<div class="form-group">
					<label for="correo">Correo</label>
					<input type="email" name="correo" class="form-control">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label for="telefono">Telefono</label>
					<input type="tel" name="telefono" class="form-control">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" name="tipo_persona" class="form-control" value="Paciente" hidden>
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