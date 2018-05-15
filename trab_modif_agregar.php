<?php require '../conexion.php';
$trab_colegiado_id = $_GET['id'];
?>
<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>COLEGIO DE PSICOLOGOS DE LA PAZ</title>
		<meta charset="utf-8"/>        
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../css/bootstrap.min.css" rel="stylesheet"/>
		<link href="../css/bootstrap-theme.css" rel="stylesheet"/>
        <link href="../assets/css/main.css" rel="stylesheet"/>
		<script src="../js/jquery-3.1.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
            
				<div class="logo"><img  class="centrado" src="../images/logo.png" width="45" alt="" /><a href="index.html">&nbsp;&nbsp;COLEGIO DE PSICOLOGOS DE LA PAZ </a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Inicio</a></li>
					<li><a href="nuevo.php">Matriculación</a></li>
					<li><a href="paginas/institucion.html">Nuestra Institución</a></li>
                    <li><a href="galeriaeventos/index.php">Eventos</a></li>
					<li><a href="buscar.php">Consultas</a></li>
					<li><a href="login/login.php">Administración</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Agregar nueva mención</p>
						<h2>FORMACIÓN</h2>
					</header>
				</div>
			</section>

		<div class="container">
			<div>
				<h3 style="text-align:center">&nbsp;</h3>
			</div>
			<form class="form-horizontal" method="POST" action="trab_modif_guardar.php" autocomplete="off">
          <input type="hidden" id="trab_colegiado_id" name="trab_colegiado_id" value="<?php echo $trab_colegiado_id; ?>" />
          <div class="form-group">
            <label for="trab_institu">Institución en la que trabajó o trabaja</label>
            <input type="text" class="form-control" id="trab_institu" name="trab_institu" placeholder="UNIVERSIDAD SALESIANA DE BOLIVIA">
          </div>
          <div class="form-group">
            <label for="trab_cargo">Cargo</label>
            <input type="text" class="form-control" id="trab_cargo" name="trab_cargo" placeholder="PSICOLOGO">
          </div>
          <div class="form-group">
            <label for="trab_area">Área de trabajo </label>
            <input type="text" class="form-control" id="trab_area" name="trab_area" placeholder="RECURSOS HUMANOS">
          </div>
          <div class="form-group">
            <label for="trab_anios">Periodo de tiempo</label>
            <input type="text" class="form-control" id="trab_anios" name="trab_anios" placeholder="CUANTO TIEMPO TRABAJÓ EN ESTA INSTITUCIÓN">
          </div>
          <div class="form-group">
            <label for="trab_gestion">Gestión</label>
            <input type="text" class="form-control" id="trab_gestion" name="trab_gestion" placeholder="ENTRE QUE GESTIONES O GESTIÓN TRABAJÓ AQUI">
          </div>
          <input type="submit" name="Submit" class="btn btn-info" value="GUARDAR">          
          <input type="button" name="nuevo" class="btn btn-info" value="REGRESAR" onclick="location.href='trab_modif_trabajos.php?id=<?php echo $row['trab_colegiado_id']; ?>'"/>
        </form>
		
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
				<div class="copyright">
					&copy; Untitled. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
</div>
	</body>
</html>