<?php
	
	require '../conexion.php';

$per_id = $_POST['per_id'];
$per_colegiado_id = $_POST['per_colegiado_id'];
$per_paterno = $_POST['per_paterno'];
$per_materno = $_POST['per_materno'];
$per_nombres = $_POST['per_nombres'];

	$per_nacimiento = $_POST['per_nacimiento'];
	$per_nacimiento0 = isset($_POST['per_nacimiento']) ? $_POST['per_nacimiento'] : '01/01/1900';
	$per_nacimiento1 = strtotime($per_nacimiento0);
	$per_nacimiento2 = date( 'Y-m-d H:i:s', $per_nacimiento1);

$per_pais_nac = $_POST['per_pais_nac'];
$per_estado_civil = $_POST['per_estado_civil'];
$per_telefono = $_POST['per_telefono'];
$per_celular1 = $_POST['per_celular1'];
$per_celular2 = $_POST['per_celular2'];
$per_correo = $_POST['per_correo'];
$per_correo_institu = $_POST['per_correo_institu'];
$per_perfil = $_POST['per_perfil'];
	
$dom_id = $_POST['dom_id'];
$dom_zona = $_POST['dom_zona'];
$dom_tipo_via = $_POST['dom_tipo_via'];
$dom_via = $_POST['dom_via'];
$dom_numero = $_POST['dom_numero'];
$dom_edificio = $_POST['dom_edificio'];
$dom_bloque = $_POST['dom_bloque'];
$dom_piso = $_POST['dom_piso'];
$dom_departamento = $_POST['dom_departamento'];
  
$cons_id = $_POST['cons_id'];
$cons_zona = $_POST['cons_zona'];
$cons_cavenida = $_POST['cons_cavenida'];
$cons_nro = $_POST['cons_nro'];
$cons_edificio = $_POST['cons_edificio'];
$cons_bloque = $_POST['cons_bloque'];
$cons_piso = $_POST['cons_piso'];
$cons_depto = $_POST['cons_depto'];
$cons_tlf_fijo = $_POST['cons_tlf_fijo'];
$cons_hr_atencion = $_POST['cons_hr_atencion'];
 
$lic_id = $_POST['lic_id'];
$lic_universidad = $_POST['lic_universidad'];
$lic_pais = $_POST['lic_pais'];
$lic_titular = $_POST['lic_titular'];
$lic_fech_emi = $_POST['lic_fech_emi'];

	$lic_fech_emi0 = isset($_POST['lic_fech_emi']) ? $_POST['lic_fech_emi'] : '01/01/1900';
	$lic_fech_emi1 = strtotime($lic_fech_emi0);
	$lic_fech_emi2 = date( 'Y-m-d H:i:s', $lic_fech_emi1);
	
$lic_cod_titu = $_POST['lic_cod_titu'];
$lic_folio = $_POST['lic_folio'];
$lic_nro_titu = $_POST['lic_nro_titu'];
$lic_serie = $_POST['lic_serie'];
$lic_fech_titu = $_POST['lic_fech_titu'];

	$lic_fech_titu0 = isset($_POST['lic_fech_titu']) ? $_POST['lic_fech_titu'] : '01/01/1900';
	$lic_fech_titu1 = strtotime($lic_fech_titu0);
	$lic_fech_titu2 = date( 'Y-m-d H:i:s', $lic_fech_titu1);
  
$exp_id = $_POST['exp_id'];
$exp_are_id = $_POST['exp_are_id'];
$exp_aresp_id = $_POST['exp_aresp_id'];
$exp_anios = $_POST['exp_anios'];
$exp_detalle = $_POST['exp_detalle'];
$exp_descripcion = $_POST['exp_descripcion'];

	
	$sql = "UPDATE psic_datos_personales
INNER JOIN psic_consultorio ON psic_datos_personales.per_colegiado_id = psic_consultorio.cons_colegiado_id
INNER JOIN psic_domicilio ON psic_consultorio.cons_colegiado_id = psic_domicilio.dom_colegiado_id
INNER JOIN psic_experiencia ON psic_domicilio.dom_colegiado_id = psic_experiencia.exp_colegiado_id
INNER JOIN psic_licenciatura ON psic_experiencia.exp_colegiado_id = psic_licenciatura.lic_colegiado_id
SET
	per_paterno='$per_paterno',
	per_materno='$per_materno',
	per_nombres='$per_nombres',
	per_nacimiento='$per_nacimiento2',
	per_pais_nac='$per_pais_nac',
	per_estado_civil='$per_estado_civil',
	per_telefono='$per_telefono',
	per_celular1='$per_celular1',
	per_celular2='$per_celular2',
	per_correo='$per_correo',
	per_correo_institu='$per_correo_institu',
	per_perfil='$per_perfil',
	
  dom_zona='$dom_zona',
  dom_tipo_via='$dom_tipo_via',
  dom_via='$dom_via',
  dom_numero='$dom_numero',
  dom_edificio='$dom_edificio',
  dom_bloque='$dom_bloque',
  dom_piso='$dom_piso',
  dom_departamento='$dom_departamento',
  
  cons_zona='$cons_zona',
  cons_cavenida='$cons_cavenida',
  cons_nro='$cons_nro',
  cons_edificio='$cons_edificio',
  cons_bloque='$cons_bloque',
  cons_piso='$cons_piso',
  cons_depto='$cons_depto',
  cons_tlf_fijo='$cons_tlf_fijo',
  cons_hr_atencion='$cons_hr_atencion',
  
  lic_universidad='$lic_universidad',
  lic_pais='$lic_pais',
  lic_titular='$lic_titular',
  lic_fech_emi='$lic_fech_emi2',
  lic_cod_titu='$lic_cod_titu',
  lic_folio='$lic_folio',
  lic_nro_titu='$lic_nro_titu',
  lic_serie='$lic_serie',
  lic_fech_titu='$lic_fech_titu2',
  
  exp_are_id=$exp_are_id,
  exp_aresp_id=$exp_aresp_id,
  exp_anios='$exp_anios',
  exp_detalle='$exp_detalle',
  exp_descripcion='$exp_descripcion'
WHERE
 psic_datos_personales.per_id = $per_id AND 
 psic_consultorio.cons_id = $cons_id AND
 psic_domicilio.dom_id = $dom_id AND
 psic_experiencia.exp_id = $exp_id AND
 psic_licenciatura.lic_id = $lic_id AND
 
 psic_datos_personales.per_colegiado_id = $per_colegiado_id;";
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
				
				 <input type="button" name="nuevo" class="btn btn-info" value="REGRESAR" onclick="location.href='modificar.php?id=<?php echo $per_colegiado_id; ?>'"/>
				
				</div>
			</div>
		</div>
	</body>
</html>
