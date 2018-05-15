<?php
	
	require '../conexion.php';

	$id = $_POST['id'];
	$form_colegiado_id = $_POST['form_colegiado_id'];
	$form_tipo_titu = trtoupper($_POST['form_tipo_titu']);
	$form_desc = trtoupper($_POST['form_desc']);
	$form_institu = trtoupper($_POST['form_institu']);
	$form_fechatitu = trtoupper(isset($_POST['form_fechatitu'])) ? trtoupper($_POST['form_fechatitu']) : getdate();
	$form_pais = trtoupper($_POST['form_pais']);
	
	$sql = "UPDATE
  psic_formacion
SET 
  form_tipo_titu = '$form_tipo_titu',
  form_desc = '$form_desc',
  form_institu = '$form_institu',
  form_pais = '$form_pais',
  form_fechatitu = '$form_fechatitu',
  form_estado = 1
WHERE
  form_id='$id'";
  //var_dump($sql);
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
				<input type="button" name="nuevo" class="btn btn-info" value="REGRESAR" onClick="location.href='modif_editar.php?id=<?php echo $id; ?>'"/>
				
				</div>
			</div>
		</div>
	</body>
</html>
