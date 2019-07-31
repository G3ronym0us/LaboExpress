 <div class="modal fade moda-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-create">
 	<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registrar Examen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/examen">
		    @csrf
		    <div class="form-group">
			    <label for="nombre">Nombre</label>
			    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del examen">
			  </div>
			  <div class="form-group">
			    <label for="descripcion">Descripción</label>
			    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese una descripción">
			  </div>
			  <div class="form-group">
			    <label for="costo">Costo</label>
			    <input type="text" class="form-control" id="costo" name="costo">
			  </div>

		   
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="Submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
 </div> 	