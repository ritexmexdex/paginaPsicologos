<?php
	
	require 'conexion.php';
	
	$dpto = $_POST['dpto'];
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$ci = $_POST['ci'];
	$expedido = $_POST['expedido'];
	$genero = isset($_POST['genero']) ? $_POST['genero'] : 0;
	
	$sql = "INSERT INTO admin_usuario(usuario_colegiado_id, usuario_rol, usuario_nombre, usuario_pass, usuario_correo, usuario_ci, usuario_expedido, usuario_dpto, usuario_genero, usuario_fecha_registro, usuario_estado)
  SELECT MAX(per_colegiado_id)+1 AS colegiado, 1, '$nombre', '$password', '$email', '$ci', $expedido, $dpto, '$genero', NOW(), 1 FROM psic_datos_personales";
	
	$resultado = $mysqli->query($sql);
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="index.html" class="btn btn-primary">REGRESAR</a>
					
				</div>
			</div>
		</div>
	</body>
</html>