<?php
	
	require '../conexion.php';
	$form_colegiado_id = $_POST['form_colegiado_id'];
	$form_tipo_titu = $_POST['form_tipo_titu'];
	$form_desc = strtoupper($_POST['form_desc']);
	$form_institu = strtoupper($_POST['form_institu']);
	$form_fechatitu = isset(strtoupper($_POST['form_fechatitu'])) ? strtoupper($_POST['form_fechatitu']) : getdate();
	$form_pais = strtoupper($_POST['form_pais']);
	
	$sql = "INSERT INTO psic_formacion(form_colegiado_id, form_tipo_titu, form_desc, form_institu, form_pais, form_fechatitu, form_estado) VALUES ($form_colegiado_id,$form_tipo_titu,'$form_desc','$form_institu','$form_pais','$form_fechatitu',1)";
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
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<input type="button" name="nuevo" class="btn btn-info" value="REGRESAR" onClick="location.href='modif_titulos.php?id=<?php echo $form_colegiado_id; ?>'"/>
					
				</div>
			</div>
		</div>
	</body>
</html>