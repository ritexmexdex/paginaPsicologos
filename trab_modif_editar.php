<?php
	require '../conexion.php';
	
	$id = $_GET['id'];
	//$id = 2;
	$sql = "SELECT
  trab_id,
  trab_colegiado_id,
  trab_institu,
  trab_cargo,
  trab_area,
  trab_anios,
  trab_gestion,
  trab_fechreg,
  trab_estado
FROM
  psic_trabajo
WHERE
  trab_id='$id' LIMIT 1";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Colegio de Psicologos de La Paz</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="../assets/css/main.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

<!-- Header -->
<header id="header" class="alt">
  <div class="logo"><img  class="centrado" src="../images/logo.png" width="45" height="45" alt="COLEGIO DE PSICOLOGOS DE LA PAZ" /></div>
  <a href="#menu">MENÚ</a> </header>
<!-- Nav -->
<nav id="menu">
  <ul class="links">
    <li><a href="../index.html">Inicio</a></li>
    <li><a href="../registroCompleto/registroColegiados.php">Matriculación</a></li>
    <li><a href="../paginas/institucion.html">El colegio</a></li>
    <li><a href="../galeriaeventos/index.php">Publicaciones</a></li>
    <li><a href="../paginas/buscar.php">Consultas</a></li>
    <li><a href="../contacto/contacto.html">Contactos</a></li>
    <li><a href="../login/login.html">Administración</a></li>
  </ul>
</nav>

<!-- One -->
<section id="One" class="wrapper style3">
  <div class="inner">
    <header class="align-center">
      <p>Éste enlace es únicamente para colegiados</p>
      <h2>INICIAR SESIÓN</h2>
    </header>
  </div>
</section>
<section id="two" class="wrapper style2">
  <div class="inner">
    <div class="box">
      <div class="content">
        <form method="POST" action="trab_update_formacion.php">
          <input type="hidden" id="id" name="id" value="<?php echo $row['trab_id']; ?>" />
          <input type="hidden" id="trab_colegiado_id" name="trab_colegiado_id" value="<?php echo $row['trab_colegiado_id']; ?>" />
          <div class="form-group">
            <label for="trab_institu">Institución en la que trabajó o trabaja</label>
            <input type="text" class="form-control" id="trab_institu" name="trab_institu" placeholder="DESCRIPCIÓN" value="<?php echo $row['trab_institu']; ?>" >
          </div>
          <div class="form-group">
            <label for="trab_cargo">Cargo</label>
            <input type="text" class="form-control" id="trab_cargo" name="trab_cargo" placeholder="DESCRIPCIÓN" value="<?php echo $row['trab_cargo']; ?>" >
          </div>
          <div class="form-group">
            <label for="trab_area">Área de trabajo </label>
            <input type="text" class="form-control" id="trab_area" name="trab_area" placeholder="INSTUCIÓN" value="<?php echo $row['trab_area']; ?>" >
          </div>
          <div class="form-group">
            <label for="trab_anios">Periodo de tiempo</label>
            <input type="text" class="form-control" id="trab_anios" name="trab_anios" placeholder="CUANTO TIEMPO TRABAJÓ EN ESTA INSTITUCIÓN" value="<?php echo $row['trab_anios']; ?>" >
          </div>
          <div class="form-group">
            <label for="trab_gestion">Gestión</label>
            <input type="text" class="form-control" id="trab_gestion" name="trab_gestion" placeholder="ENTRE QUE GESTIONES O GESTIÓN TRABAJÓ AQUI" value="<?php echo $row['trab_gestion']; ?>" >
          </div>
          <input type="submit" name="Submit" class="btn btn-info" value="GUARDAR">          
          <input type="button" name="nuevo" class="btn btn-info" value="REGRESAR" onclick="location.href='trab_modif_trabajos.php?id=<?php echo $row['trab_colegiado_id']; ?>'"/>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Footer -->
<footer id="footer">
  <div class="container">
    <ul class="icons">
      <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
      <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
      <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
      <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
    </ul>
  </div>
  <div class="copyright">Colegio Departamental de Psicólogos de La Paz
    C. Socabaya, esq. Máriscal Santa Cruz N°240 - Edificio Handal, Piso 5, Oficina 511</div>
</footer>
<!-- Scripts --> 
<script src="../assets/js/jquery.min.js"></script> 
<script src="../assets/js/jquery.scrollex.min.js"></script> 
<script src="../assets/js/skel.min.js"></script> 
<script src="../assets/js/util.js"></script> 
<script src="../assets/js/main.js"></script>
</body>
</html>