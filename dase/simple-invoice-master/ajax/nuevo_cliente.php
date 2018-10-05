<?php
	include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if ($_POST['tipo_identificacion']==""){
			$errors[] = "Selecciona el tipo de identificacion";
		} else if (empty($_POST['identificacion'])){
			$errors[] = "Ingrese identificacion";
		}else if  (empty($_POST['razon_social'])){
           $errors[] = "Nombre vacío";
        } else if (($_POST['saldo_inicial'])){
        	$errors[] = "ingrese saldo";
        } else if ($_POST['tipo_identificacion']!="" &&
    			  	!empty($_POST['identificacion']) &&
    			  	!empty($_POST['razon_social']) &&
    			  	!empty($_POST['saldo_inicial']) 
    				
    	){
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$tipo_identificacion=intval($_POST['tipo_identificacion']);
		$identificacion=mysqli_real_escape_string($con,(strip_tags($_POST["identificacion"],ENT_QUOTES)));
		$razon_social=mysqli_real_escape_string($con,(strip_tags($_POST["razon_social"],ENT_QUOTES)));
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$telefono=mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));
		$email=mysqli_real_escape_string($con,(strip_tags($_POST["email"],ENT_QUOTES)));
		$direccion=mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));
		$observacion=mysqli_real_escape_string($con,(strip_tags($_POST["observacion"],ENT_QUOTES)));
		$saldo_inicial=floatval($_POST['saldo_inicial']);
		$estado=intval($_POST['estado']);
		$date_added=date("Y-m-d H:i:s");
		$sql="INSERT INTO clientes (tipo_identificacion, identificacion, razon_social, nombre_cliente, telefono_cliente, email_cliente, direccion_cliente, observacion, saldo_inicial, status_cliente, date_added) VALUES ('$tipo_identificacion', '$identificacion', $razon_social', '$nombre','$telefono','$email','$direccion', '$observacion', '$saldo_inicial', '$estado','$date_added')";
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
				$messages[] = "Cliente ha sido ingresado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>