@extends('layouts.admin')
@section('contenido')

<div class="container">
	@include('examen.create')
		<a href="" data-target="#modal-create" data-toggle="modal"><button class="btn btn-primary">Nuevo Examen</button></a>
		<br><br>
	<div class="row">
		<div class="col">
			<h3>Listado de Examenes</h3>
		</div>
	</div>

	
</div>

<div class="container">
	
	<table id="examenes" class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombres</th>
				<th>Descripción</th>
				<th>Costo</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		
	</table>


</div>




@endsection

@section('pluging')

	<script type="text/javascript">
	$(document).ready(function() {
	    $('#examenes').DataTable({
	    	serverSide: true,
	    	ajax: {
            	"url": "{{url('api/examenes')}}",
            	"type": "POST"
        	},
	    	columns: [
	    		{data: 'id'},
	    		{data: 'nombre'},
	    		{data: 'descripcion'},
	    		{data: 'costo'},
	    		{data: 'btn'}
	    	]
	    });
	} );
	
	</script>

@endsection