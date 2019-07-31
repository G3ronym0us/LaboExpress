@extends('layouts.admin')
@section('contenido')


	<form method="POST" action="/factura">
		@csrf
	  <div class="form-group">
	    <label for="C">Paciente</label>
	    <select name="id_paciente" class="form-control">
			@foreach($pacientes as $paciente)
			<option value="{{$paciente->id_persona}}">{{$paciente->nombres}}</option>
			@endforeach
		</select>
	  </div>

	  <div class="row">

				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<div class="form-group">
						<label>Examen</label>
						<select name="id_examen" id="id_examen" class="form-control selectpicker" data-live-search="true">
						@foreach($examenes as $examen)
						<option value="{{$examen->id}}_{{$examen->costo}}">{{$examen->nombre}}</option>
						@endforeach
						</select>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
					<div class="form-group">
						<label for="cantidad">Cantidad</label>
						<input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="cantidad">
					</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<div class="form-group">
						<label for="precio_compra">Valor Unitario</label>
						<input type="number" name="valor_unitario" id="valor_unitario" class="form-control" placeholder="P. compra" readonly="readonly"		>
					</div>
				</div>	
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
					<div class="form-group">
						<label> </label>
						<button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
					<table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
						<thead style="background-color:#A9D0F5">
							<th>Opciones</th>
							<th>Examen</th>
							<th>Cantidad</th>
							<th>Valor Unitario</th>
							<th>Subtotal</th>
						</thead>
						<tfoot>
							<th>TOTAL</th>
							<th></th>
							<th></th>
							<th></th>
							<th><H4 id="total">Bs/. 0.00</H4></th>
						</tfoot>
						<tbody>
						</tbody>
					</table>

			
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="guardar">
			<div class="form-group">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
		</div>
	</div>

	</form>



@endsection

@section('pluging')

<script>
	$(document).ready(function(){
		$('#bt_add').click(function(){
			agregar();
		});
	});
	var cont=0;
	total=0;
	subtotal=[];
	$("#guardar").hide();
	$("#id_examen").change(mostrarValores);

	function mostrarValores(){
		datosArticulo=document.getElementById('id_examen').value.split('_');
		$("#valor_unitario").val(datosArticulo[1]);
	}


	function agregar(){
		id_examen=datosArticulo[0];
		examen=$("#id_examen option:selected").text();
		cantidad=$("#cantidad").val();
		valor_unitario=$("#valor_unitario").val();
		if (id_examen!="" && cantidad!="" && cantidad>0 && valor_unitario!=""	)
		{
			subtotal[cont]=(cantidad*valor_unitario);
			total=total+subtotal[cont];
			var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="id_examen[]" value="'+id_examen+'">'+examen+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td><td><input type="number" name="valor_unitario[]" value="'+valor_unitario+'"></td><td><input type="number" name="subtotal[]" value="'+subtotal[cont]+'"</td></tr>';
			cont++;
			limpiar();
			$("#total").html("Bs/. "+total);
			evaluar();
			$('#detalles').append(fila);
		}
		else
		{
			alert("Error al ingresar los detalles de ingreso, revise los datos del articulo");
		}
	}
	function limpiar(){
		$("#pcantidad").val("");
		$("#pprecio_compra").val("");
		$("#pprecio_venta").val("");
	}
	function evaluar(){
		if(total>0)
		{
			$("#guardar").show();
		}
		else
		{
			$("#guardar").hide();
		}
	}
	function eliminar(index)
	{
		total=total-subtotal[index];
		$('#total').html("Bs/. "+total);
		$('#fila'+index).remove();
		evaluar();
	}
</script>

@endsection