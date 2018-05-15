<?php require '../conexion.php';
$form_colegiado_id = $_GET['id'];
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
			<form class="form-horizontal" method="POST" action="modif_guardar.php" autocomplete="off">
          <input type="hidden" id="form_colegiado_id" name="form_colegiado_id" value="<?php echo $form_colegiado_id; ?>" />
          <div class="form-group">
            <label for="form_tipo_titu">Tipo de titulación</label>
            <select class="form-control" id="form_tipo_titu" name="form_tipo_titu">
              <option value="2"> DIPLOMADO </option>
              <option value="3"> MAESTRIA </option>
              <option value="4"> DOCTORADO </option>
              <option value="5"> POST-DOCTORADO </option>
              <option value="6"> ESPECIALIDAD </option>
            </select>
          </div>
          <div class="form-group">
            <label for="form_desc">Descripción</label>
            <input type="text" class="form-control" id="form_desc" name="form_desc" required>
          </div>
          <div class="form-group">
            <label for="cel1">Institución </label>
            <input type="text" class="form-control" id="form_institu" name="form_institu" placeholder="INSTUCIÓN">
          </div>
          <div class="form-group">
            <label for="cel2">Fecha de titulación</label>
            <input type="date" class="form-control" id="form_fechatitu" name="form_fechatitu" placeholder="FECHA EN LA QUE OBTUVO EL TÍTULO">
          </div>
         
<div class="form-group">
            <label for="form_pais">Pa&iacute;s donde realizo el curso</label>
            <select class="form-control" id="form_pais" name="form_pais">
                <option value="BOLIVIA">BOLIVIA</option>
                <option value="AFGANISTAN">AFGANISTAN</option>
                <option value="ALBANIA">ALBANIA</option>
                <option value="ALEMANIA">ALEMANIA</option>
                <option value="ANDORRA">ANDORRA</option>
                <option value="ANGOLA">ANGOLA</option>
                <option value="ANTIGUA Y BARBUDA">ANTIGUA Y BARBUDA</option>
                <option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
                <option value="ARGELIA">ARGELIA</option>
                <option value="ARGENTINA">ARGENTINA</option>
                <option value="ARMENIA">ARMENIA</option>
                <option value="AUSTRALIA">AUSTRALIA</option>
                <option value="AUSTRIA">AUSTRIA</option>
                <option value="AZERBAIYAN">AZERBAIYAN</option>
                <option value="BAHAMAS">BAHAMAS</option>
                <option value="BANGLADES">BANGLADES</option>
                <option value="BARBADOS">BARBADOS</option>
                <option value="BAREIN">BAREIN</option>
                <option value="BELGICA">BELGICA</option>
                <option value="BELICE">BELICE</option>
                <option value="BENIN">BENIN</option>
                <option value="BIELORRUSIA">BIELORRUSIA</option>
                <option value="BIRMANIA">BIRMANIA</option>
                <option value="BOSNIA-HERZEGOVINA">BOSNIA-HERZEGOVINA</option>
                <option value="BOTSUANA">BOTSUANA</option>
                <option value="BRASIL">BRASIL</option>
                <option value="BRUNEI">BRUNEI</option>
                <option value="BULGARIA">BULGARIA</option>
                <option value="BURKINA FASO">BURKINA FASO</option>
                <option value="BURUNDI">BURUNDI</option>
                <option value="BUTAN">BUTAN</option>
                <option value="CABO VERDE">CABO VERDE</option>
                <option value="CAMBOYA">CAMBOYA</option>
                <option value="CAMERUN">CAMERUN</option>
                <option value="CANADA">CANADA</option>
                <option value="CATAR">CATAR</option>
                <option value="CHAD">CHAD</option>
                <option value="CHILE">CHILE</option>
                <option value="CHINA">CHINA</option>
                <option value="CHIPRE">CHIPRE</option>
                <option value="COLOMBIA">COLOMBIA</option>
                <option value="COMORAS">COMORAS</option>
                <option value="CONGO">CONGO</option>
                <option value="COREA DEL NORTE">COREA DEL NORTE</option>
                <option value="COREA DEL SUR">COREA DEL SUR</option>
                <option value="COSTA DE MARFIL">COSTA DE MARFIL</option>
                <option value="COSTA RICA">COSTA RICA</option>
                <option value="CROACIA">CROACIA</option>
                <option value="CUBA">CUBA</option>
                <option value="DINAMARCA">DINAMARCA</option>
                <option value="DOMINICA">DOMINICA</option>
                <option value="ECUADOR">ECUADOR</option>
                <option value="EGIPTO">EGIPTO</option>
                <option value="EL SALVADOR">EL SALVADOR</option>
                <option value="EMIRATOS ARABES UNIDOS">EMIRATOS ARABES UNIDOS</option>
                <option value="ERITREA">ERITREA</option>
                <option value="ESLOVAQUIA">ESLOVAQUIA</option>
                <option value="ESLOVENIA">ESLOVENIA</option>
                <option value="ESPAÑA">ESPAÑA</option>
                <option value="ESTADOS UNIDOS">ESTADOS UNIDOS</option>
                <option value="ESTONIA">ESTONIA</option>
                <option value="ETIOPIA">ETIOPIA</option>
                <option value="FILIPINAS">FILIPINAS</option>
                <option value="FINLANDIA">FINLANDIA</option>
                <option value="FIYI">FIYI</option>
                <option value="FRANCIA">FRANCIA</option>
                <option value="GABON">GABON</option>
                <option value="GAMBIA">GAMBIA</option>
                <option value="GEORGIA">GEORGIA</option>
                <option value="GHANA">GHANA</option>
                <option value="GRANADA">GRANADA</option>
                <option value="GRECIA">GRECIA</option>
                <option value="GUATEMALA">GUATEMALA</option>
                <option value="GUINEA">GUINEA</option>
                <option value="GUINEA ECUATORIAL">GUINEA ECUATORIAL</option>
                <option value="GUINEA-BISAU">GUINEA-BISAU</option>
                <option value="GUYANA">GUYANA</option>
                <option value="HAITI">HAITI</option>
                <option value="HONDURAS">HONDURAS</option>
                <option value="HUNGRIA">HUNGRIA</option>
                <option value="INDIA">INDIA</option>
                <option value="INDONESIA">INDONESIA</option>
                <option value="IRAK">IRAK</option>
                <option value="IRAN">IRAN</option>
                <option value="IRLANDA">IRLANDA</option>
                <option value="ISLANDIA">ISLANDIA</option>
                <option value="ISLAS MARSHALL">ISLAS MARSHALL</option>
                <option value="ISLAS SALOMON">ISLAS SALOMON</option>
                <option value="ISRAEL">ISRAEL</option>
                <option value="ITALIA">ITALIA</option>
                <option value="JAMAICA">JAMAICA</option>
                <option value="JAPON">JAPON</option>
                <option value="JORDANIA">JORDANIA</option>
                <option value="KAZAJISTAN">KAZAJISTAN</option>
                <option value="KENIA">KENIA</option>
                <option value="KIRGUISTAN">KIRGUISTAN</option>
                <option value="KIRIBATI">KIRIBATI</option>
                <option value="KOSOVO">KOSOVO</option>
                <option value="KUWAIT">KUWAIT</option>
                <option value="LAOS">LAOS</option>
                <option value="LESOTO">LESOTO</option>
                <option value="LETONIA">LETONIA</option>
                <option value="LIBANO">LIBANO</option>
                <option value="LIBERIA">LIBERIA</option>
                <option value="LIBIA">LIBIA</option>
                <option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
                <option value="LITUANIA">LITUANIA</option>
                <option value="LUXEMBURGO">LUXEMBURGO</option>
                <option value="MACEDONIA">MACEDONIA</option>
                <option value="MADAGASCAR">MADAGASCAR</option>
                <option value="MALASIA">MALASIA</option>
                <option value="MALAUI">MALAUI</option>
                <option value="MALDIVAS">MALDIVAS</option>
                <option value="MALI">MALI</option>
                <option value="MALTA">MALTA</option>
                <option value="MARRUECOS">MARRUECOS</option>
                <option value="MAURICIO">MAURICIO</option>
                <option value="MAURITANIA">MAURITANIA</option>
                <option value="MEXICO">MEXICO</option>
                <option value="MICRONESIA">MICRONESIA</option>
                <option value="MOLDAVIA">MOLDAVIA</option>
                <option value="MONACO">MONACO</option>
                <option value="MONGOLIA">MONGOLIA</option>
                <option value="MONTENEGRO">MONTENEGRO</option>
                <option value="MOZAMBIQUE">MOZAMBIQUE</option>
                <option value="NAMIBIA">NAMIBIA</option>
                <option value="NAURU">NAURU</option>
                <option value="NEPAL">NEPAL</option>
                <option value="NICARAGUA">NICARAGUA</option>
                <option value="NIGER">NIGER</option>
                <option value="NIGERIA">NIGERIA</option>
                <option value="NORUEGA">NORUEGA</option>
                <option value="NUEVA ZELANDA">NUEVA ZELANDA</option>
                <option value="OMAN">OMAN</option>
                <option value="PAISES BAJOS">PAISES BAJOS</option>
                <option value="PAKISTAN">PAKISTAN</option>
                <option value="PALAOS">PALAOS</option>
                <option value="PALESTINA">PALESTINA</option>
                <option value="PANAMA">PANAMA</option>
                <option value="PAPUA NUEVA GUINEA">PAPUA NUEVA GUINEA</option>
                <option value="PARAGUAY">PARAGUAY</option>
                <option value="PERU">PERU</option>
                <option value="POLONIA">POLONIA</option>
                <option value="PORTUGAL">PORTUGAL</option>
                <option value="REINO UNIDO">REINO UNIDO</option>
                <option value="REPUBLICA CENTROAFRICANA">REPUBLICA CENTROAFRICANA</option>
                <option value="REPUBLICA CHECA">REPUBLICA CHECA</option>
                <option value="REPUBLICA DEMOCRATICA DEL CONGO">REPUBLICA DEMOCRATICA DEL CONGO</option>
                <option value="REPUBLICA DOMINICANA">REPUBLICA DOMINICANA</option>
                <option value="RUANDA">RUANDA</option>
                <option value="RUMANIA">RUMANIA</option>
                <option value="RUSIA">RUSIA</option>
                <option value="SAMOA">SAMOA</option>
                <option value="SAN CRISTOBAL Y NIEVES">SAN CRISTOBAL Y NIEVES</option>
                <option value="SAN MARINO">SAN MARINO</option>
                <option value="SAN VICENTE Y LAS GRANADINAS">SAN VICENTE Y LAS GRANADINAS</option>
                <option value="SANTA LUCIA">SANTA LUCIA</option>
                <option value="SANTO TOME Y PRINCIPE">SANTO TOME Y PRINCIPE</option>
                <option value="SENEGAL">SENEGAL</option>
                <option value="SERBIA">SERBIA</option>
                <option value="SEYCHELLES">SEYCHELLES</option>
                <option value="SIERRA LEONA">SIERRA LEONA</option>
                <option value="SINGAPUR">SINGAPUR</option>
                <option value="SIRIA">SIRIA</option>
                <option value="SOMALIA">SOMALIA</option>
                <option value="SRI LANKA">SRI LANKA</option>
                <option value="SUAZILANDIA">SUAZILANDIA</option>
                <option value="SUDAFRICA">SUDAFRICA</option>
                <option value="SUDAN">SUDAN</option>
                <option value="SUDAN DEL SUR">SUDAN DEL SUR</option>
                <option value="SUECIA">SUECIA</option>
                <option value="SUIZA">SUIZA</option>
                <option value="SURINAM">SURINAM</option>
                <option value="TAILANDIA">TAILANDIA</option>
                <option value="TAIWAN">TAIWAN</option>
                <option value="TANZANIA">TANZANIA</option>
                <option value="TAYIKISTAN">TAYIKISTAN</option>
                <option value="TIMOR ORIENTAL">TIMOR ORIENTAL</option>
                <option value="TOGO">TOGO</option>
                <option value="TONGA">TONGA</option>
                <option value="TRINIDAD Y TOBAGO">TRINIDAD Y TOBAGO</option>
                <option value="TUNEZ">TUNEZ</option>
                <option value="TURKMENISTAN">TURKMENISTAN</option>
                <option value="TURQUIA">TURQUIA</option>
                <option value="TUVALU">TUVALU</option>
                <option value="UCRANIA">UCRANIA</option>
                <option value="UGANDA">UGANDA</option>
                <option value="URUGUAY">URUGUAY</option>
                <option value="UZBEKISTAN">UZBEKISTAN</option>
                <option value="VANUATU">VANUATU</option>
                <option value="VATICANO">VATICANO</option>
                <option value="VENEZUELA">VENEZUELA</option>
                <option value="VIETNAM">VIETNAM</option>
                <option value="YEMEN">YEMEN</option>
                <option value="YIBUTI">YIBUTI</option>
                <option value="ZAMBIA">ZAMBIA</option>
                <option value="ZIMBABUE">ZIMBABUE</option>
              </select>
            </select>
          </div>
          <input type="submit" name="Submit" class="btn btn-info" value="GUARDAR">          
          <input type="button" name="nuevo" class="btn btn-info" value="REGRESAR" onclick="location.href='modif_titulos.php?id=<?php echo $row['form_colegiado_id']; ?>'"/>
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