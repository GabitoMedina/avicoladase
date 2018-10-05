	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="nuevoProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo producto</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
			<div id="resultados_ajax_productos"></div>
			  <div class="form-group">
				<label for="codigo" class="col-sm-3 control-label">Código</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código del producto" required>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required maxlength="255" ></textarea>
				  
				</div>
			  </div>

			  <div class="form-group">
			  	<div class="col-sm-5">
			  		<label for="tipo-product" class="col-sm-3 control-label">Tipo Prod.</label>
				<div class="col-sm-8">
				 <select class="form-control" id="tipo_producto" name="tipo_producto" required>
					<option value="1" selected>BIEN</option>
					<option value="0">SERVICIO</option>
				  </select>
				</div>
				</div>
				<div class="col-sm-5">
			  		<label for="unidad_medida" class="col-sm-3 control-label">U. Medida</label>
				<div class="col-sm-8">
				 <select class="form-control" id="unidad_medida" name="unidad_medida" required>
					<option value="2">LIBRAS</option>
					<option value="1" selected>UNIDAD</option>
					<option value="0">KILOGRAMOS</option>
				  </select>
				</div>
				</div>
			  </div>

			  <div class="form-group">
			  	<div class="col-sm-5">
			  		<label for="tarifa_iva" class="col-sm-3 control-label">IVA</label>
				<div class="col-sm-8">
				 <select class="form-control" id="tarifa_iva" name="tarifa_iva" required>
					<option value="">-- Selecciona estado --</option>
					<option value="1" selected>0%</option>
					<option value="0">12%</option>
				  </select>
				</div>
				</div>
				<div class="col-sm-5">
			  		<label for="estado" class="col-sm-3 control-label">Estado</label>
				<div class="col-sm-8">
				 <select class="form-control" id="estado" name="estado" required>
					<option value="">-- Selecciona estado --</option>
					<option value="1" selected>Activo</option>
					<option value="0">Inactivo</option>
				  </select>
				</div>
				</div>
			  </div>
			  <div class="form-group">
				<label for="precio" class="col-sm-3 control-label">Precio</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio de venta del producto" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
				</div>
			  </div>
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>