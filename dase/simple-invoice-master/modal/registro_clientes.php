	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="nuevoCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo cliente</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_cliente" name="guardar_cliente">
			
			<div id="resultados_ajax"></div>
			<div class="form-group">
				<label for="tipo_identificacion" class="col-sm-3 control-label">Tip. Identif.</label>
				<div class="col-sm-8">
					<select class="form-control" id="tipo_identificacion" name="tipo_identificacion" required>
						<option value="">-- Selecciona estado --</option>
						<option value="1" >CI</option>
						<option value="0">RUC</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="identificacion" class="col-sm-3 control-label">Identificacion</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="identificacion" name="identificacion" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="razon_social" class="col-sm-3 control-label">Razon Social</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="razon_social" name="razon_social" required>
				</div>
			  </div>

			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre Comercial</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="nombre" name="nombre">
				</div>
			  </div>
			  <div class="form-group">
				<label for="telefono" class="col-sm-3 control-label">Teléfono</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="telefono" name="telefono" >
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="email" class="col-sm-3 control-label">Email</label>
				<div class="col-sm-8">
					<input type="email" class="form-control" id="email" name="email" >
				  
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="direccion" class="col-sm-3 control-label">Dirección</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="direccion" name="direccion"   maxlength="255" ></textarea>
				  
				</div>
			  </div>
			  <div class="form-group">
				<label for="observacion" class="col-sm-3 control-label">Observacion</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="observacion" name="observacion"   maxlength="255" ></textarea>				  
				</div>
			  </div>
			  <div class="form-group">
				<label for="saldo_inicial" class="col-sm-3 control-label">Saldo Inicial</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="saldo_inicial" name="saldo_inicial" required>
				</div>
			  </div>
			  
			  <div class="form-group">
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