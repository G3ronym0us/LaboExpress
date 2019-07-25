@extends('layouts.admin')
@section('contenido')
	
	<div class="container">
		<div class="row">
			<div class="col">
				<h3>Nuevo Cliente</h3>
			</div>
		</div>

		<form method="POST" action="{{url('paciente').'/'.$persona->id_persona}}">

		@csrf
			@method('PATCH')
		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label for="nombres">Nombres</label>
					<input type="text" name="nombres" class="form-control" value="{{$persona->nombres}}">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label for="apellidos">Apellidos</label>
					<input type="text" name="apellidos" class="form-control" value="{{$persona->apellidos}}">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label for="cedula">Cedula</label>
					<input type="text" name="cedula" class="form-control" value="{{$persona->cedula}}">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label for="sexo">Sexo</label>
					<input type="text" name="sexo" class="form-control" value="{{$persona->sexo}}">
				</div>
			</div>
			<div class="col-8">
				<div class="form-group">
					<label for="correo">Correo</label>
					<input type="email" name="correo" class="form-control" value="{{$persona->correo}}">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label for="telefono">Telefono</label>
					<input type="tel" name="telefono" class="form-control" value="{{$persona->telefono}}">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<input type="text" name="tipo_persona" class="form-control" value="Paciente">
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