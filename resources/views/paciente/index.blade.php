@extends('layouts.admin')
@section('contenido')

<div class="container">

	<div class="row">
		<div class="col">
			<h3>Listado de Pacientes</h3>
		</div>
	</div>

	
</div>

<div class="container">
	
	<table id="paciente" class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Cedula</th>
				<th>Sexo</th>
				<th>Correo</th>
				<th>Telefono</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		
	</table>


</div>

	<script type="text/javascript">
	$(document).ready(function() {
	    $('#paciente').DataTable({
	    	serverSide: true,
	    	ajax: {
            	"url": "{{url('api/paciente')}}",
            	"type": "POST"
        	},
	    	columns: [
	    		{data: 'id_persona'},
	    		{data: 'nombres'},
	    		{data: 'apellidos'},
	    		{data: 'cedula'},
	    		{data: 'sexo'},
	    		{data: 'correo'},
	    		{data: 'telefono'},
	    		{data: 'btn'}
	    	]
	    });
	} );
	
</script>


@endsection