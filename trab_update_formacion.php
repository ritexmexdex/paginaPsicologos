<?php
	
	require '../conexion.php';

	$id = $_POST['id'];
	$trab_colegiado_id = $_POST['trab_colegiado_id'];
	$trab_institu = strtoupper($_POST['trab_institu']);
	$trab_cargo = strtoupper($_POST['trab_cargo']);
	$trab_area = strtoupper($_POST['trab_area']);
	$trab_anios = strtoupper($_POST['trab_anios']);
	$trab_gestion = strtoupper($_POST['trab_gestion']);

	
	$sql = "UPDATE psic_trabajo
	SET 
	  trab_institu= '$trab_institu',
	  trab_cargo= '$trab_cargo',
	  trab_area= '$trab_area',
	  trab_anios= '$trab_anios',
	  trab_gestion= '$trab_gestion',
	  trab_fechreg= 'GETDATE()',
	  trab_estado= 1  
	WHERE
	  trab_id = '$id'";
  var_dump($sql);
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
				<h3>REGISTRO MODIFICADO</h3>
				<?php } else { ?>
				<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>
				<input type="button" name="nuevo" class="btn btn-info" value="REGRESAR" onClick="location.href='trab_modif_editar.php?id=<?php echo $trab_colegiado_id; ?>'"/>
				
				</div>
			</div>
		</div>
	</body>
</html>
