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
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/bootstrap-theme.css" rel="stylesheet"/>
        <link href="assets/css/main.css" rel="stylesheet"/>
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
            
				<div class="logo"><img  class="centrado" src="images/logo.png" width="45" alt="" /><a href="index.html">&nbsp;&nbsp;COLEGIO DE PSICOLOGOS DE LA PAZ </a></div>
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
						<p>Debe crear una cuenta</p>
						<h2>Matriculación</h2>
					</header>
				</div>
			</section>

		<div class="container">
			<div>
				<h3 style="text-align:center">&nbsp;</h3>
			</div>
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
            	<div class="form-group">
					<label for="dpto" class="col-sm-2 control-label">Departamento</label>
					<div class="col-sm-10">
						<select class="form-control" id="dpto" name="dpto">
                           <option value="1">BENI</option>
                           <option value="2">CHUQUISACA</option>
                           <option value="3">COCHABAMBA</option>
                           <option value="4">LA PAZ</option>
                           <option value="5">ORURO</option>
                           <option value="6">PANDO</option>
                           <option value="7">POTOSI</option>
                           <option value="8">SANTA CRUZ</option>
                           <option value="9">TARIJA</option>
						</select>
					</div>
				</div>
                
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre de usuario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Usuario" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Correo</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="CORREO ELECTRÓNICO" required>
					</div>
				</div>
                
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="password" name="password" placeholder="CONTRASEÑA" required>
					</div>
				</div>
                
                <div class="form-group">
					<label for="email" class="col-sm-2 control-label">Repetir la contraseña</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="password2" name="password2" placeholder="REPETIR CONTRASEÑA" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Cédula</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="ci" name="ci" placeholder="CARNET DE IDENTIDAD">
					</div>
				</div>
				
				<div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Expedido</label>
					<div class="col-sm-10">
						<select class="form-control" id="expedido" name="expedido">
                           <option value="1">BENI</option>
                           <option value="2">CHUQUISACA</option>
                           <option value="3">COCHABAMBA</option>
                           <option value="4">LA PAZ</option>
                           <option value="5">ORURO</option>
                           <option value="6">PANDO</option>
                           <option value="7">POTOSI</option>
                           <option value="8">SANTA CRUZ</option>
                           <option value="9">TARIJA</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="genero" class="col-sm-2 control-label">Género</label>
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="genero" name="genero" value="M" checked> Masculino
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="genero" name="genero" value="F"> Femenino
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.html" class="btn btn-default">REGRESAR</a>
						<button type="submit" class="btn btn-primary">REGISTRAR</button>
					</div>
				</div>
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</div>
	</body>
</html>