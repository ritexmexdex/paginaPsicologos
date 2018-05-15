<?php
session_start();
?>
<?php 
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "colpsiclapaz";
$tbl_name = "admin_usuario";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM $tbl_name WHERE usuario_nombre = '$username' AND usuario_pass = '$password'"; 
$result = $conexion->query($sql);
if ($result->num_rows > 0) {     
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);
 //var_dump($row['usuario_pass']);
 //var_dump($password);
 if ($password == $row['usuario_pass']) {
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
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
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><img  class="centrado" src="../images/logo.png" width="45" height="45" alt="" /><a href="../index.html">&nbsp;&nbsp;COLEGIO DE PSICOLOGOS DE LA PAZ </a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="../index.html">Inicio</a></li>
					<li><a href="nuevo.php">Matriculación</a></li>
					<li><a href="paginas/institucion.html">Nuestra Institución</a></li>
                    <li><a href="galeriaeventos/index.php">Eventos</a></li>
					<li><a href="buscar.php">Consultas</a></li>
					<li><a href="elements.html">Administración</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Material de apoyo</p>
						<h2>RECURSOS</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>Tutoriales, lecturas, ensayos</p>
								<h2>Libros</h2>
							</header>
                                        <ul class="alt">
											<li><a href="https://es.slideshare.net/AlvaroBarriosRequena/psicoanalisis-para-principiantes-71402228" target="_blank" class="icon fa-slideshare"><span class="label"></span>  Psicoanalisis para principiantes.</a></li>
                                            <li><a href="https://es.slideshare.net/AlvaroBarriosRequena/lacan-para-principiantes-71402086" target="_blank" class="icon fa-slideshare"><span class="label"></span> Lacan para principiantes.</a></li>
                                            <li><a href="https://es.slideshare.net/AlvaroBarriosRequena/freud-para-principiantes-71401882" target="_blank" class="icon fa-slideshare"><span class="label"></span>  Freud-para-principiantes.</a></li>
                                            <li><a href="https://es.slideshare.net/AlvaroBarriosRequena/el-placer-de-leer-a-freud-juan-david-nasio" target="_blank" class="icon fa-slideshare"><span class="label"></span>  El placer de leer a Freud.</a></li>
                                            <li><a href="https://es.slideshare.net/AlvaroBarriosRequena/psicologa-de-las-masas-y-anlisis-del-yo" target="_blank" class="icon fa-slideshare"><span class="label"></span>  Psicología de las masas y análisis del yo.</a></li>
                                            <li><a href="https://es.slideshare.net/AlvaroBarriosRequena/manifiesto-comunista-69361572" target="_blank" class="icon fa-slideshare"><span class="label"></span>  Manifiesto comunista.</a></li>
                                            <li><a href="https://es.slideshare.net/AlvaroBarriosRequena/ontologia-de-la-mirada" target="_blank" class="icon fa-slideshare"><span class="label"></span>  Ontología de la mirada.</a></li>
                                            <li><a href="https://es.slideshare.net/AlvaroBarriosRequena/sujeto-del-icc-1-12985706" target="_blank" class="icon fa-slideshare"><span class="label"></span>  Sujeto del ICC 1.</a></li>
                                            <li><a href="https://es.slideshare.net/AlvaroBarriosRequena/el-fantasma-y-la-muerte-del-padre" target="_blank" class="icon fa-slideshare"><span class="label"></span>  El fantasma y la muerte del padre.</a></li>
                                            <li><a href="https://es.slideshare.net/AlvaroBarriosRequena/semblantes-de-un-sexo-inefable" target="_blank" class="icon fa-slideshare"><span class="label"></span>  Semblantes de un sexo inefable.</a></li>
										</ul>

							<header class="align-center">
								<p>introducciones, prologos</p>
								<h2>PRESENTACIONES</h2>
							</header>
                                        <ul class="alt">
											<li><a href="https://es.slideshare.net/AlvaroBarriosRequena/introduccin-a-la-lectura-de-lacan-dor-joel" target="_blank" class="icon fa-slideshare"><span class="label"></span>  Introduccin a la lectura de lacan dor joel.</a></li>
                                            <li><a href="https://es.slideshare.net/AlvaroBarriosRequena/diccionario-de-topologia-lacaniana" target="_blank" class="icon fa-slideshare"><span class="label"></span> Diccionario de topología lacaniana.</a></li>
                                            <li><a href="https://es.slideshare.net/AlvaroBarriosRequena/ontologa-12985477" target="_blank" class="icon fa-slideshare"><span class="label"></span>  Ontología.</a></li>
										</ul>
                              	<header class="align-center">
								<p>audios, radios, streaming</p>
								<h2>AUDIOS</h2>
							</header>
                                        <ul class="alt">
											<li><a href="https://www.ivoox.com/monografico-16-mindfulness-metodo-budista-compilacion-audios-mp3_rf_22447708_1.html?autoplay=true" target="_blank" class="icon fa-microphone"><span class="label"></span> 02:12:42     &gt;&gt; Mindfulness y el método budista (compilación de mis audios sobre mindfulness y budismo).</a></li>
                                            <li><a href="https://www.ivoox.com/apegos-como-nos-esclavizan-elisa-bernal-audios-mp3_rf_22536919_1.html" target="_blank" class="icon fa-microphone"><span class="label"></span> 01:38:30     &gt;&gt; Los apegos. Cómo nos esclavizan con Eliza Bernal - Conferencia.</a></li>
                                            <li><a href="https://www.ivoox.com/maitri-autoamor-ternura-compasion-inspirada-la-audios-mp3_rf_22433804_1.html" target="_blank" class="icon fa-microphone"><span class="label"></span> 38:52     &gt;&gt; MAITRI: Autoamor, ternura y compasión inspirada en la psicología de oriente.</a></li>
                                            <li><a href="https://www.ivoox.com/psicologia-motivacion-tema-2-segunda-parte-audios-mp3_rf_22562932_1.html" target="_blank" class="icon fa-microphone"><span class="label"></span> 53:08     &gt;&gt; Psicología de la Motivación. Tema 2. Segunda parte.</a></li>
										</ul>
                                        <header class="align-center">
								<p>documentales, cursos, sociedad</p>
								<h2>VIDEOS</h2>
							</header>
                                        <ul class="alt">
											<li><a href="https://www.youtube.com/watch?v=UkzpcLbFMeU" target="_blank" class="icon fa-youtube-square"><span class="label"></span> &gt;&gt; Documental sobre la depresión - psicología.</a></li>
                                            <li><a href="https://www.youtube.com/watch?v=7fERX0OXAIY" target="_blank" class="icon fa-youtube-square"><span class="label"></span> &gt;&gt; Un crimen llamado educación Versión completa HD dirigido por Jürgen Klaric.</a></li>
                                            <li><a href="https://www.youtube.com/watch?v=Dm1Kk8RXgzw" target="_blank" class="icon fa-youtube-square"><span class="label"></span> &gt;&gt; ANTIDEPRESIVOS : UN MUNDO ILUSORIO.</a></li>
                                            <li><a href="https://www.youtube.com/watch?v=o7kLfHpySek" target="_blank" class="icon fa-youtube-square"><span class="label"></span> &gt;&gt; Redes Psicologia (el poder de las redes sociales) Eduardo Punset.</a></li>
										</ul>
						</div>
					</div>
				</div>
			</section>
<?php 
 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion); 
 ?>

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

	</body>
</html>