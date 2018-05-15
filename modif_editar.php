<?php
	require '../conexion.php';
	
	$id = $_GET['id'];
	//$id = 2;
	$sql = "SELECT form_id, form_colegiado_id, form_tipo_titu, form_desc, form_institu, form_pais, form_fechatitu FROM psic_formacion WHERE form_id='$id' LIMIT 1";
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
        <form method="POST" action="update_formacion.php">
          <input type="hidden" id="id" name="id" value="<?php echo $row['form_id']; ?>" />
          <input type="hidden" id="form_colegiado_id" name="form_colegiado_id" value="<?php echo $row['form_colegiado_id']; ?>" />
          <div class="form-group">
            <label for="form_tipo_titu">TIPO DE TITULACIÓN</label>
            <select class="form-control" id="form_tipo_titu" name="form_tipo_titu">
              <option value="2" <?php if($row['form_tipo_titu']=='2') echo 'selected'; ?>> DIPLOMADO </option>
              <option value="3" <?php if($row['form_tipo_titu']=='3') echo 'selected'; ?>> MAESTRIA </option>
              <option value="4" <?php if($row['form_tipo_titu']=='4') echo 'selected'; ?>> DOCTORADO </option>
              <option value="5" <?php if($row['form_tipo_titu']=='5') echo 'selected'; ?>> POST-DOCTORADO </option>
              <option value="6" <?php if($row['form_tipo_titu']=='6') echo 'selected'; ?>> ESPECIALIDAD </option>
            </select>
          </div>
          <div class="form-group">
            <label for="telf1">Descripción</label>
            <input type="text" class="form-control" id="form_desc" name="form_desc" placeholder="DESCRIPCIÓN" value="<?php echo $row['form_desc']; ?>" >
          </div>
          <div class="form-group">
            <label for="cel1">Institución </label>
            <input type="text" class="form-control" id="form_institu" name="form_institu" placeholder="INSTUCIÓN" value="<?php echo $row['form_institu']; ?>" >
          </div>
          <div class="form-group">
            <label for="cel2">Fecha de titulación</label>
            <input type="date" class="form-control" id="form_fechatitu" name="form_fechatitu" placeholder="FECHA EN LA QUE OBTUVO EL TÍTULO" value="<?php echo $row['form_fechatitu']; ?>" >
          </div>
         
<div class="form-group">
            <label for="form_pais">Pa&iacute;s donde realizo el curso</label>
            <select class="form-control" id="form_pais" name="form_pais">
              <option value="BOLIVIA" <?php if($row['form_pais']=='BOLIVIA') echo 'selected'; ?>> BOLIVIA </option>
              <option value="AFGANISTAN" <?php if($row['form_pais']=='AFGANISTAN') echo 'selected'; ?>> AFGANISTAN </option>
              <option value="AKROTIRI" <?php if($row['form_pais']=='AKROTIRI') echo 'selected'; ?>> AKROTIRI </option>
              <option value="ALBANIA" <?php if($row['form_pais']=='ALBANIA') echo 'selected'; ?>> ALBANIA </option>
              <option value="ALEMANIA" <?php if($row['form_pais']=='ALEMANIA') echo 'selected'; ?>> ALEMANIA </option>
              <option value="ANDORRA" <?php if($row['form_pais']=='ANDORRA') echo 'selected'; ?>> ANDORRA </option>
              <option value="ANGOLA" <?php if($row['form_pais']=='ANGOLA') echo 'selected'; ?>> ANGOLA </option>
              <option value="ANGUILA" <?php if($row['form_pais']=='ANGUILA') echo 'selected'; ?>> ANGUILA </option>
              <option value="ANTARTIDA" <?php if($row['form_pais']=='ANTARTIDA') echo 'selected'; ?>> ANTARTIDA </option>
              <option value="ANTIGUA Y BARBUDA" <?php if($row['form_pais']=='ANTIGUA Y BARBUDA') echo 'selected'; ?>> ANTIGUA Y BARBUDA </option>
              <option value="ANTILLAS NEERLANDESAS" <?php if($row['form_pais']=='ANTILLAS NEERLANDESAS') echo 'selected'; ?>> ANTILLAS NEERLANDESAS </option>
              <option value="ARABIA SAUDI" <?php if($row['form_pais']=='ARABIA SAUDI') echo 'selected'; ?>> ARABIA SAUDI </option>
              <option value="ARCTIC OCEAN" <?php if($row['form_pais']=='ARCTIC OCEAN') echo 'selected'; ?>> ARCTIC OCEAN </option>
              <option value="ARGELIA" <?php if($row['form_pais']=='ARGELIA') echo 'selected'; ?>> ARGELIA </option>
              <option value="ARGENTINA" <?php if($row['form_pais']=='ARGENTINA') echo 'selected'; ?>> ARGENTINA </option>
              <option value="ARMENIA" <?php if($row['form_pais']=='ARMENIA') echo 'selected'; ?>> ARMENIA </option>
              <option value="ARUBA" <?php if($row['form_pais']=='ARUBA') echo 'selected'; ?>> ARUBA </option>
              <option value="ASHMORE ANDCARTIER ISLANDS" <?php if($row['form_pais']=='ASHMORE ANDCARTIER ISLANDS') echo 'selected'; ?>> ASHMORE ANDCARTIER ISLANDS </option>
              <option value="ATLANTIC OCEAN" <?php if($row['form_pais']=='ATLANTIC OCEAN') echo 'selected'; ?>> ATLANTIC OCEAN </option>
              <option value="AUSTRALIA" <?php if($row['form_pais']=='AUSTRALIA') echo 'selected'; ?>> AUSTRALIA </option>
              <option value="AUSTRIA" <?php if($row['form_pais']=='AUSTRIA') echo 'selected'; ?>> AUSTRIA </option>
              <option value="AZERBAIYAN" <?php if($row['form_pais']=='AZERBAIYAN') echo 'selected'; ?>> AZERBAIYAN </option>
              <option value="BAHAMAS" <?php if($row['form_pais']=='BAHAMAS') echo 'selected'; ?>> BAHAMAS </option>
              <option value="BAHRAIN" <?php if($row['form_pais']=='BAHRAIN') echo 'selected'; ?>> BAHRAIN </option>
              <option value="BANGLADESH" <?php if($row['form_pais']=='BANGLADESH') echo 'selected'; ?>> BANGLADESH </option>
              <option value="BARBADOS" <?php if($row['form_pais']=='BARBADOS') echo 'selected'; ?>> BARBADOS </option>
              <option value="BELGICA" <?php if($row['form_pais']=='BELGICA') echo 'selected'; ?>> BELGICA </option>
              <option value="BELICE" <?php if($row['form_pais']=='BELICE') echo 'selected'; ?>> BELICE </option>
              <option value="BENIN" <?php if($row['form_pais']=='BENIN') echo 'selected'; ?>> BENIN </option>
              <option value="BERMUDAS" <?php if($row['form_pais']=='BERMUDAS') echo 'selected'; ?>> BERMUDAS </option>
              <option value="BIELORRUSIA" <?php if($row['form_pais']=='BIELORRUSIA') echo 'selected'; ?>> BIELORRUSIA </option>
              <option value="BIRMANIA MYANMAR" <?php if($row['form_pais']=='BIRMANIA MYANMAR') echo 'selected'; ?>> BIRMANIA MYANMAR </option> 
              <option value="BOSNIA Y HERCEGOVINA" <?php if($row['form_pais']=='BOSNIA Y HERCEGOVINA') echo 'selected'; ?>> BOSNIA Y HERCEGOVINA </option>
              <option value="BOTSUANA" <?php if($row['form_pais']=='BOTSUANA') echo 'selected'; ?>> BOTSUANA </option>
              <option value="BRASIL" <?php if($row['form_pais']=='BRASIL') echo 'selected'; ?>> BRASIL </option>
              <option value="BRUNEI" <?php if($row['form_pais']=='BRUNEI') echo 'selected'; ?>> BRUNEI </option>
              <option value="BULGARIA" <?php if($row['form_pais']=='BULGARIA') echo 'selected'; ?>> BULGARIA </option>
              <option value="BURKINA FASO" <?php if($row['form_pais']=='BURKINA FASO') echo 'selected'; ?>> BURKINA FASO </option>
              <option value="BURUNDI" <?php if($row['form_pais']=='BURUNDI') echo 'selected'; ?>> BURUNDI </option>
              <option value="BUTAN" <?php if($row['form_pais']=='BUTAN') echo 'selected'; ?>> BUTAN </option>
              <option value="CABO VERDE" <?php if($row['form_pais']=='CABO VERDE') echo 'selected'; ?>> CABO VERDE </option>
              <option value="CAMBOYA" <?php if($row['form_pais']=='CAMBOYA') echo 'selected'; ?>> CAMBOYA </option>
              <option value="CAMERUN" <?php if($row['form_pais']=='CAMERUN') echo 'selected'; ?>> CAMERUN </option>
              <option value="CANADA" <?php if($row['form_pais']=='CANADA') echo 'selected'; ?>> CANADA </option>
              <option value="CHAD" <?php if($row['form_pais']=='CHAD') echo 'selected'; ?>> CHAD </option>
              <option value="CHILE" <?php if($row['form_pais']=='CHILE') echo 'selected'; ?>> CHILE </option>
              <option value="CHINA" <?php if($row['form_pais']=='CHINA') echo 'selected'; ?>> CHINA </option>
              <option value="CHIPRE" <?php if($row['form_pais']=='CHIPRE') echo 'selected'; ?>> CHIPRE </option>
              <option value="CLIPPERTON ISLAND" <?php if($row['form_pais']=='CLIPPERTON ISLAND') echo 'selected'; ?>> CLIPPERTON ISLAND </option>
              <option value="COLOMBIA" <?php if($row['form_pais']=='COLOMBIA') echo 'selected'; ?>> COLOMBIA </option>
              <option value="COMORAS" <?php if($row['form_pais']=='COMORAS') echo 'selected'; ?>> COMORAS </option>
              <option value="CONGO" <?php if($row['form_pais']=='CONGO') echo 'selected'; ?>> CONGO </option>
              <option value="CORAL SEA ISLANDS" <?php if($row['form_pais']=='CORAL SEA ISLANDS') echo 'selected'; ?>> CORAL SEA ISLANDS </option>
              <option value="COREA DEL NORTE" <?php if($row['form_pais']=='COREA DEL NORTE') echo 'selected'; ?>> COREA DEL NORTE </option>
              <option value="COREA DEL SUR" <?php if($row['form_pais']=='COREA DEL SUR') echo 'selected'; ?>> COREA DEL SUR </option>
              <option value="COSTA DE MARFIL" <?php if($row['form_pais']=='COSTA DE MARFIL') echo 'selected'; ?>> COSTA DE MARFIL </option>
              <option value="COSTA RICA" <?php if($row['form_pais']=='COSTA RICA') echo 'selected'; ?>> COSTA RICA </option>
              <option value="CROACIA" <?php if($row['form_pais']=='CROACIA') echo 'selected'; ?>> CROACIA </option>
              <option value="CUBA" <?php if($row['form_pais']=='CUBA') echo 'selected'; ?>> CUBA </option>
              <option value="DHEKELIA" <?php if($row['form_pais']=='DHEKELIA') echo 'selected'; ?>> DHEKELIA </option>
              <option value="DINAMARCA" <?php if($row['form_pais']=='DINAMARCA') echo 'selected'; ?>> DINAMARCA </option>
              <option value="DOMINICA" <?php if($row['form_pais']=='DOMINICA') echo 'selected'; ?>> DOMINICA </option>
              <option value="ECUADOR" <?php if($row['form_pais']=='ECUADOR') echo 'selected'; ?>> ECUADOR </option>
              <option value="EGIPTO" <?php if($row['form_pais']=='EGIPTO') echo 'selected'; ?>> EGIPTO </option>
              <option value="EL SALVADOR" <?php if($row['form_pais']=='EL SALVADOR') echo 'selected'; ?>> EL SALVADOR </option>
              <option value="EL VATICANO" <?php if($row['form_pais']=='EL VATICANO') echo 'selected'; ?>> EL VATICANO </option>
              <option value="EMIRATOS ARABES UNIDOS" <?php if($row['form_pais']=='EMIRATOS ARABES UNIDOS') echo 'selected'; ?>> EMIRATOS ARABES UNIDOS </option>
              <option value="ERITREA" <?php if($row['form_pais']=='ERITREA') echo 'selected'; ?>> ERITREA </option>
              <option value="ESLOVAQUIA" <?php if($row['form_pais']=='ESLOVAQUIA') echo 'selected'; ?>> ESLOVAQUIA </option>
              <option value="ESLOVENIA" <?php if($row['form_pais']=='ESLOVENIA') echo 'selected'; ?>> ESLOVENIA </option>
              <option value="ESPAÑA" <?php if($row['form_pais']=='ESPAÑA') echo 'selected'; ?>> ESPAÑA </option>
              <option value="ESTADOS UNIDOS" <?php if($row['form_pais']=='ESTADOS UNIDOS') echo 'selected'; ?>> ESTADOS UNIDOS </option>
              <option value="ESTONIA" <?php if($row['form_pais']=='ESTONIA') echo 'selected'; ?>> ESTONIA </option>
              <option value="ETIOPIA" <?php if($row['form_pais']=='ETIOPIA') echo 'selected'; ?>> ETIOPIA </option>
              <option value="FILIPINAS" <?php if($row['form_pais']=='FILIPINAS') echo 'selected'; ?>> FILIPINAS </option>
              <option value="FINLANDIA" <?php if($row['form_pais']=='FINLANDIA') echo 'selected'; ?>> FINLANDIA </option>
              <option value="FIYI" <?php if($row['form_pais']=='FIYI') echo 'selected'; ?>> FIYI </option>
              <option value="FRANCIA" <?php if($row['form_pais']=='FRANCIA') echo 'selected'; ?>> FRANCIA </option>
              <option value="GABON" <?php if($row['form_pais']=='GABON') echo 'selected'; ?>> GABON </option>
              <option value="GAMBIA" <?php if($row['form_pais']=='GAMBIA') echo 'selected'; ?>> GAMBIA </option>
              <option value="GAZA STRIP" <?php if($row['form_pais']=='GAZA STRIP') echo 'selected'; ?>> GAZA STRIP </option>
              <option value="GEORGIA" <?php if($row['form_pais']=='GEORGIA') echo 'selected'; ?>> GEORGIA </option>
              <option value="GHANA" <?php if($row['form_pais']=='GHANA') echo 'selected'; ?>> GHANA </option>
              <option value="GIBRALTAR" <?php if($row['form_pais']=='GIBRALTAR') echo 'selected'; ?>> GIBRALTAR </option>
              <option value="GRANADA" <?php if($row['form_pais']=='GRANADA') echo 'selected'; ?>> GRANADA </option>
              <option value="GRECIA" <?php if($row['form_pais']=='GRECIA') echo 'selected'; ?>> GRECIA </option>
              <option value="GROENLANDIA" <?php if($row['form_pais']=='GROENLANDIA') echo 'selected'; ?>> GROENLANDIA </option>
              <option value="GUAM" <?php if($row['form_pais']=='GUAM') echo 'selected'; ?>> GUAM </option>
              <option value="GUATEMALA" <?php if($row['form_pais']=='GUATEMALA') echo 'selected'; ?>> GUATEMALA </option>
              <option value="GUERNSEY" <?php if($row['form_pais']=='GUERNSEY') echo 'selected'; ?>> GUERNSEY </option>
              <option value="GUINEA" <?php if($row['form_pais']=='GUINEA') echo 'selected'; ?>> GUINEA </option>
              <option value="GUINEA ECUATORIAL" <?php if($row['form_pais']=='GUINEA ECUATORIAL') echo 'selected'; ?>> GUINEA ECUATORIAL </option>
              <option value="GUINEA-BISSAU" <?php if($row['form_pais']=='GUINEA-BISSAU') echo 'selected'; ?>> GUINEA-BISSAU </option>
              <option value="GUYANA" <?php if($row['form_pais']=='GUYANA') echo 'selected'; ?>> GUYANA </option>
              <option value="HAITI" <?php if($row['form_pais']=='HAITI') echo 'selected'; ?>> HAITI </option>
              <option value="HONDURAS" <?php if($row['form_pais']=='HONDURAS') echo 'selected'; ?>> HONDURAS </option>
              <option value="HONG KONG" <?php if($row['form_pais']=='HONG KONG') echo 'selected'; ?>> HONG KONG </option>
              <option value="HUNGRIA" <?php if($row['form_pais']=='HUNGRIA') echo 'selected'; ?>> HUNGRIA </option>
              <option value="INDIA" <?php if($row['form_pais']=='INDIA') echo 'selected'; ?>> INDIA </option>
              <option value="INDIAN OCEAN" <?php if($row['form_pais']=='INDIAN OCEAN') echo 'selected'; ?>> INDIAN OCEAN </option>
              <option value="INDONESIA" <?php if($row['form_pais']=='INDONESIA') echo 'selected'; ?>> INDONESIA </option>
              <option value="IRAN" <?php if($row['form_pais']=='IRAN') echo 'selected'; ?>> IRAN </option>
              <option value="IRAQ" <?php if($row['form_pais']=='IRAQ') echo 'selected'; ?>> IRAQ </option>
              <option value="IRLANDA" <?php if($row['form_pais']=='IRLANDA') echo 'selected'; ?>> IRLANDA </option>
              <option value="ISLA BOUVET" <?php if($row['form_pais']=='ISLA BOUVET') echo 'selected'; ?>> ISLA BOUVET </option>
              <option value="ISLA CHRISTMAS" <?php if($row['form_pais']=='ISLA CHRISTMAS') echo 'selected'; ?>> ISLA CHRISTMAS </option>
              <option value="ISLA NORFOLK" <?php if($row['form_pais']=='ISLA NORFOLK') echo 'selected'; ?>> ISLA NORFOLK </option>
              <option value="ISLANDIA" <?php if($row['form_pais']=='ISLANDIA') echo 'selected'; ?>> ISLANDIA </option>
              <option value="ISLAS CAIMAN" <?php if($row['form_pais']=='ISLAS CAIMAN') echo 'selected'; ?>> ISLAS CAIMAN </option>
              <option value="ISLAS COCOS" <?php if($row['form_pais']=='ISLAS COCOS') echo 'selected'; ?>> ISLAS COCOS </option>
              <option value="ISLAS COOK" <?php if($row['form_pais']=='ISLAS COOK') echo 'selected'; ?>> ISLAS COOK </option>
              <option value="ISLAS FEROE" <?php if($row['form_pais']=='ISLAS FEROE') echo 'selected'; ?>> ISLAS FEROE </option>
              <option value="ISLAS GEORGIA DEL SUR Y SANDWICH DEL SUR" <?php if($row['form_pais']=='ISLAS GEORGIA DEL SUR Y SANDWICH DEL SUR') echo 'selected'; ?>> ISLAS GEORGIA DEL SUR Y SANDWICH DEL SUR </option>
              <option value="ISLAS HEARD Y MCDONALD" <?php if($row['form_pais']=='SOLTERO') echo 'ISLAS HEARD Y MCDONALD'; ?>> ISLAS HEARD Y MCDONALD </option>
              <option value="ISLAS MALVINAS" <?php if($row['form_pais']=='ISLAS MALVINAS') echo 'selected'; ?>> ISLAS MALVINAS </option>
              <option value="ISLAS MARIANAS DEL NORTE" <?php if($row['form_pais']=='ISLAS MARIANAS DEL NORTE') echo 'selected'; ?>> ISLAS MARIANAS DEL NORTE </option>
              <option value="ISLASMARSHALL" <?php if($row['form_pais']=='ISLASMARSHALL') echo 'selected'; ?>> ISLASMARSHALL </option>
              <option value="ISLAS PITCAIRN" <?php if($row['form_pais']=='ISLAS PITCAIRN') echo 'selected'; ?>> ISLAS PITCAIRN </option>
              <option value="ISLAS SALOMON" <?php if($row['form_pais']=='ISLAS SALOMON') echo 'selected'; ?>> ISLAS SALOMON </option>
              <option value="ISLAS TURCAS Y CAICOS" <?php if($row['form_pais']=='ISLAS TURCAS Y CAICOS') echo 'selected'; ?>> ISLAS TURCAS Y CAICOS </option>
              <option value="ISLAS VIRGENES AMERICANAS" <?php if($row['form_pais']=='ISLAS VIRGENES AMERICANAS') echo 'selected'; ?>> ISLAS VIRGENES AMERICANAS </option>
              <option value="ISLAS VIRGENES BRITANICAS" <?php if($row['form_pais']=='ISLAS VIRGENES BRITANICAS') echo 'selected'; ?>> ISLAS VIRGENES BRITANICAS </option>
              <option value="ISRAEL" <?php if($row['form_pais']=='ISRAEL') echo 'selected'; ?>> ISRAEL </option>
              <option value="ITALIA" <?php if($row['form_pais']=='ITALIA') echo 'selected'; ?>> ITALIA </option>
              <option value="JAMAICA" <?php if($row['form_pais']=='JAMAICA') echo 'selected'; ?>> JAMAICA </option>
              <option value="JAN MAYEN" <?php if($row['form_pais']=='JAN MAYEN') echo 'selected'; ?>> JAN MAYEN </option>
              <option value="JAPON" <?php if($row['form_pais']=='JAPON') echo 'selected'; ?>> JAPON </option>
              <option value="JERSEY" <?php if($row['form_pais']=='JERSEY') echo 'selected'; ?>> JERSEY </option>
              <option value="JORDANIA" <?php if($row['form_pais']=='JORDANIA') echo 'selected'; ?>> JORDANIA </option>
              <option value="KAZAJISTAN" <?php if($row['form_pais']=='KAZAJISTAN') echo 'selected'; ?>> KAZAJISTAN </option>
              <option value="KENIA" <?php if($row['form_pais']=='KENIA') echo 'selected'; ?>> KENIA </option>
              <option value="KIRGUIZISTAN" <?php if($row['form_pais']=='KIRGUIZISTAN') echo 'selected'; ?>> KIRGUIZISTAN </option>
              <option value="KIRIBATI" <?php if($row['form_pais']=='KIRIBATI') echo 'selected'; ?>> KIRIBATI </option>
              <option value="KUWAIT" <?php if($row['form_pais']=='KUWAIT') echo 'selected'; ?>> KUWAIT </option>
              <option value="LAOS" <?php if($row['form_pais']=='LAOS') echo 'selected'; ?>> LAOS </option>
              <option value="LESOTO" <?php if($row['form_pais']=='LESOTO') echo 'selected'; ?>> LESOTO </option>
              <option value="LETONIA" <?php if($row['form_pais']=='LETONIA') echo 'selected'; ?>> LETONIA </option>
              <option value="LIBANO" <?php if($row['form_pais']=='LIBANO') echo 'selected'; ?>> LIBANO </option>
              <option value="LIBERIA" <?php if($row['form_pais']=='LIBERIA') echo 'selected'; ?>> LIBERIA </option>
              <option value="LIBIA" <?php if($row['form_pais']=='LIBIA') echo 'selected'; ?>> LIBIA </option>
              <option value="LIECHTENSTEIN" <?php if($row['form_pais']=='LIECHTENSTEIN') echo 'selected'; ?>> LIECHTENSTEIN </option>
              <option value="LITUANIA" <?php if($row['form_pais']=='LITUANIA') echo 'selected'; ?>> LITUANIA </option>
              <option value="LUXEMBURGO" <?php if($row['form_pais']=='LUXEMBURGO') echo 'selected'; ?>> LUXEMBURGO </option>
              <option value="MACAO" <?php if($row['form_pais']=='MACAO') echo 'selected'; ?>> MACAO </option>
              <option value="MACEDONIA" <?php if($row['form_pais']=='MACEDONIA') echo 'selected'; ?>> MACEDONIA </option>
              <option value="MADAGASCAR" <?php if($row['form_pais']=='MADAGASCAR') echo 'selected'; ?>> MADAGASCAR </option>
              <option value="MALASIA" <?php if($row['form_pais']=='MALASIA') echo 'selected'; ?>> MALASIA </option>
              <option value="MALAUI" <?php if($row['form_pais']=='MALAUI') echo 'selected'; ?>> MALAUI </option>
              <option value="MALDIVAS" <?php if($row['form_pais']=='MALDIVAS') echo 'selected'; ?>> MALDIVAS </option>
              <option value="MALI" <?php if($row['form_pais']=='MALI') echo 'selected'; ?>> MALI </option>
              <option value="MALTA" <?php if($row['form_pais']=='MALTA') echo 'selected'; ?>> MALTA </option>
              <option value="MAN, ISLE OF" <?php if($row['form_pais']=='MAN, ISLE OF') echo 'selected'; ?>> MAN, ISLE OF </option>
              <option value="MARRUECOS" <?php if($row['form_pais']=='MARRUECOS') echo 'selected'; ?>> MARRUECOS </option>
              <option value="MAURICIO" <?php if($row['form_pais']=='MAURICIO') echo 'selected'; ?>> MAURICIO </option>
              <option value="MAURITANIA" <?php if($row['form_pais']=='MAURITANIA') echo 'selected'; ?>> MAURITANIA </option>
              <option value="MAYOTTE" <?php if($row['form_pais']=='MAYOTTE') echo 'selected'; ?>> MAYOTTE </option>
              <option value="MEXICO" <?php if($row['form_pais']=='MEXICO') echo 'selected'; ?>> MEXICO </option>
              <option value="MICRONESIA" <?php if($row['form_pais']=='MICRONESIA') echo 'selected'; ?>> MICRONESIA </option>
              <option value="MOLDAVIA" <?php if($row['form_pais']=='MOLDAVIA') echo 'selected'; ?>> MOLDAVIA </option>
              <option value="MONACO" <?php if($row['form_pais']=='MONACO') echo 'selected'; ?>> MONACO </option>
              <option value="MONGOLIA" <?php if($row['form_pais']=='MONGOLIA') echo 'selected'; ?>> MONGOLIA </option>
              <option value="MONTSERRAT" <?php if($row['form_pais']=='MONTSERRAT') echo 'selected'; ?>> MONTSERRAT </option>
              <option value="MOZAMBIQUE" <?php if($row['form_pais']=='MOZAMBIQUE') echo 'selected'; ?>> MOZAMBIQUE </option>
              <option value="NAMIBIA" <?php if($row['form_pais']=='NAMIBIA') echo 'selected'; ?>> NAMIBIA </option>
              <option value="NAURU" <?php if($row['form_pais']=='NAURU') echo 'selected'; ?>> NAURU </option>
              <option value="NAVASSA ISLAND" <?php if($row['form_pais']=='NAVASSA ISLAND') echo 'selected'; ?>> NAVASSA ISLAND </option>
              <option value="NEPAL" <?php if($row['form_pais']=='NEPAL') echo 'selected'; ?>> NEPAL </option>
              <option value="NICARAGUA" <?php if($row['form_pais']=='NICARAGUA') echo 'selected'; ?>> NICARAGUA </option>
              <option value="NIGER" <?php if($row['form_pais']=='NIGER') echo 'selected'; ?>> NIGER </option>
              <option value="NIGERIA" <?php if($row['form_pais']=='NIGERIA') echo 'selected'; ?>> NIGERIA </option>
              <option value="NIUE" <?php if($row['form_pais']=='NIUE') echo 'selected'; ?>> NIUE </option>
              <option value="NORUEGA" <?php if($row['form_pais']=='NORUEGA') echo 'selected'; ?>> NORUEGA </option>
              <option value="NUEVA CALEDONIA" <?php if($row['form_pais']=='NUEVA CALEDONIA') echo 'selected'; ?>> NUEVA CALEDONIA </option>
              <option value="NUEVA ZELANDA" <?php if($row['form_pais']=='NUEVA ZELANDA') echo 'selected'; ?>> NUEVA ZELANDA </option>
              <option value="OMAN" <?php if($row['form_pais']=='OMAN') echo 'selected'; ?>> OMAN </option>
              <option value="PACIFIC OCEAN" <?php if($row['form_pais']=='PACIFIC OCEAN') echo 'selected'; ?>> PACIFIC OCEAN </option>
              <option value="PAISES BAJOS" <?php if($row['form_pais']=='PAISES BAJOS') echo 'selected'; ?>> PAISES BAJOS </option>
              <option value="PAKISTAN" <?php if($row['form_pais']=='PAKISTAN') echo 'selected'; ?>> PAKISTAN </option>
              <option value="PALAOS" <?php if($row['form_pais']=='PALAOS') echo 'selected'; ?>> PALAOS </option>
              <option value="PANAMA" <?php if($row['form_pais']=='PANAMA') echo 'selected'; ?>> PANAMA </option>
              <option value="PAPUA-NUEVA GUINEA" <?php if($row['form_pais']=='PAPUA-NUEVA GUINEA') echo 'selected'; ?>> PAPUA-NUEVA GUINEA </option>
              <option value="PARACEL ISLANDS" <?php if($row['form_pais']=='PARACEL ISLANDS') echo 'selected'; ?>> PARACEL ISLANDS </option>
              <option value="PARAGUAY" <?php if($row['form_pais']=='PARAGUAY') echo 'selected'; ?>> PARAGUAY </option>
              <option value="PERU" <?php if($row['form_pais']=='PERU') echo 'selected'; ?>> PERU </option>
              <option value="POLINESIA FRANCESA" <?php if($row['form_pais']=='POLINESIA FRANCESA') echo 'selected'; ?>> POLINESIA FRANCESA </option>
              <option value="POLONIA" <?php if($row['form_pais']=='POLONIA') echo 'selected'; ?>> POLONIA </option>
              <option value="PORTUGAL" <?php if($row['form_pais']=='PORTUGAL') echo 'selected'; ?>> PORTUGAL </option>
              <option value="PUERTO RICO" <?php if($row['form_pais']=='PUERTO RICO') echo 'selected'; ?>> PUERTO RICO </option>
              <option value="QATAR" <?php if($row['form_pais']=='QATAR') echo 'selected'; ?>> QATAR </option>
              <option value="REINO UNIDO" <?php if($row['form_pais']=='REINO UNIDO') echo 'selected'; ?>> REINO UNIDO </option>
              <option value="REPUBLICA CENTROAFRICANA" <?php if($row['form_pais']=='REPUBLICA CENTROAFRICANA') echo 'selected'; ?>> REPUBLICA CENTROAFRICANA </option>
              <option value="REPUBLICA CHECA" <?php if($row['form_pais']=='REPUBLICA CHECA') echo 'selected'; ?>> REPUBLICA CHECA </option>
              <option value="REPUBLICA DEMOCRATICA DEL CONGO" <?php if($row['form_pais']=='REPUBLICA DEMOCRATICA DEL CONGO') echo 'selected'; ?>> REPUBLICA DEMOCRATICA DEL CONGO </option>
              <option value="REPUBLICA DOMINICANA" <?php if($row['form_pais']=='REPUBLICA DOMINICANA') echo 'selected'; ?>> REPUBLICA DOMINICANA </option>
              <option value="RUANDA" <?php if($row['form_pais']=='RUANDA') echo 'selected'; ?>> RUANDA </option>
              <option value="RUMANIA" <?php if($row['form_pais']=='RUMANIA') echo 'selected'; ?>> RUMANIA </option>
              <option value="RUSIA" <?php if($row['form_pais']=='RUSIA') echo 'selected'; ?>> RUSIA </option>
              <option value="SAHARA OCCIDENTAL" <?php if($row['form_pais']=='SAHARA OCCIDENTAL') echo 'selected'; ?>> SAHARA OCCIDENTAL </option>
              <option value="SAMOA" <?php if($row['form_pais']=='SAMOA') echo 'selected'; ?>> SAMOA </option>
              <option value="SAMOA AMERICANA" <?php if($row['form_pais']=='SAMOA AMERICANA') echo 'selected'; ?>> SAMOA AMERICANA </option>
              <option value="SAN CRISTOBAL Y NIEVES" <?php if($row['form_pais']=='SAN CRISTOBAL Y NIEVES') echo 'selected'; ?>> SAN CRISTOBAL Y NIEVES </option>
              <option value="SAN MARINO" <?php if($row['form_pais']=='SAN MARINO') echo 'selected'; ?>> SAN MARINO </option>
              <option value="SAN PEDRO Y MIQUELON" <?php if($row['form_pais']=='SAN PEDRO Y MIQUELON') echo 'selected'; ?>> SAN PEDRO Y MIQUELON </option>
              <option value="SAN VICENTE Y LAS GRANADINAS" <?php if($row['form_pais']=='SAN VICENTE Y LAS GRANADINAS') echo 'selected'; ?>> SAN VICENTE Y LAS GRANADINAS </option>
              <option value="SANTA HELENA" <?php if($row['form_pais']=='SANTA HELENA') echo 'selected'; ?>> SANTA HELENA </option>
              <option value="SANTA LUCIA" <?php if($row['form_pais']=='SANTA LUCIA') echo 'selected'; ?>> SANTA LUCIA </option>
              <option value="SANTO TOME Y PRINCIPE" <?php if($row['form_pais']=='SANTO TOME Y PRINCIPE') echo 'selected'; ?>> SANTO TOME Y PRINCIPE </option>
              <option value="SENEGAL" <?php if($row['form_pais']=='SENEGAL') echo 'selected'; ?>> SENEGAL </option>
              <option value="SEYCHELLES" <?php if($row['form_pais']=='SEYCHELLES') echo 'selected'; ?>> SEYCHELLES </option>
              <option value="SIERRA LEONA" <?php if($row['form_pais']=='SIERRA LEONA') echo 'selected'; ?>> SIERRA LEONA </option>
              <option value="SINGAPUR" <?php if($row['form_pais']=='SINGAPUR') echo 'selected'; ?>> SINGAPUR </option>
              <option value="SIRIA" <?php if($row['form_pais']=='SIRIA') echo 'selected'; ?>> SIRIA </option>
              <option value="SOMALIA" <?php if($row['form_pais']=='SOMALIA') echo 'selected'; ?>> SOMALIA </option>
              <option value="SOUTHERN OCEAN" <?php if($row['form_pais']=='SOUTHERN OCEAN') echo 'selected'; ?>> SOUTHERN OCEAN </option>
              <option value="SPRATLY ISLANDS" <?php if($row['form_pais']=='SPRATLY ISLANDS') echo 'selected'; ?>> SPRATLY ISLANDS </option>
              <option value="SRI LANKA" <?php if($row['form_pais']=='SRI LANKA') echo 'selected'; ?>> SRI LANKA </option>
              <option value="SUAZILANDIA" <?php if($row['form_pais']=='SUAZILANDIA') echo 'selected'; ?>> SUAZILANDIA </option>
              <option value="SUDAFRICA" <?php if($row['form_pais']=='SUDAFRICA') echo 'selected'; ?>> SUDAFRICA </option>
              <option value="SUDAN" <?php if($row['form_pais']=='SUDAN') echo 'selected'; ?>> SUDAN </option>
              <option value="SUECIA" <?php if($row['form_pais']=='SUECIA') echo 'selected'; ?>> SUECIA </option>
              <option value="SUIZA" <?php if($row['form_pais']=='SUIZA') echo 'selected'; ?>> SUIZA </option>
              <option value="SURINAM" <?php if($row['form_pais']=='SURINAM') echo 'selected'; ?>> SURINAM </option>
              <option value="SVALBARD Y JAN MAYEN" <?php if($row['form_pais']=='SVALBARD Y JAN MAYEN') echo 'selected'; ?>> SVALBARD Y JAN MAYEN </option>
              <option value="TAILANDIA" <?php if($row['form_pais']=='TAILANDIA') echo 'selected'; ?>> TAILANDIA </option>
              <option value="TAIWAN" <?php if($row['form_pais']=='TAIWAN') echo 'selected'; ?>> TAIWAN </option>
              <option value="TANZANIA" <?php if($row['form_pais']=='TANZANIA') echo 'selected'; ?>> TANZANIA </option>
              <option value="TAYIKISTAN" <?php if($row['form_pais']=='TAYIKISTAN') echo 'selected'; ?>> TAYIKISTAN </option>
              <option value="TERRITORIOBRITANICODEL OCEANO INDICO" <?php if($row['form_pais']=='TERRITORIOBRITANICODEL OCEANO INDICO') echo 'selected'; ?>> TERRITORIOBRITANICODEL OCEANO INDICO </option>
              <option value="TERRITORIOS AUSTRALES FRANCESES" <?php if($row['form_pais']=='TERRITORIOS AUSTRALES FRANCESES') echo 'selected'; ?>> TERRITORIOS AUSTRALES FRANCESES </option>
              <option value="TIMOR ORIENTAL" <?php if($row['form_pais']=='TIMOR ORIENTAL') echo 'selected'; ?>> TIMOR ORIENTAL </option>
              <option value="TOGO" <?php if($row['form_pais']=='TOGO') echo 'selected'; ?>> TOGO </option>
              <option value="TOKELAU" <?php if($row['form_pais']=='TOKELAU') echo 'selected'; ?>> TOKELAU </option>
              <option value="TONGA" <?php if($row['form_pais']=='TONGA') echo 'selected'; ?>> TONGA </option>
              <option value="TRINIDAD Y TOBAGO" <?php if($row['form_pais']=='TRINIDAD Y TOBAGO') echo 'selected'; ?>> TRINIDAD Y TOBAGO </option>
              <option value="TUNEZ" <?php if($row['form_pais']=='TUNEZ') echo 'selected'; ?>> TUNEZ </option>
              <option value="TURKMENISTAN" <?php if($row['form_pais']=='TURKMENISTAN') echo 'selected'; ?>> TURKMENISTAN </option>
              <option value="TURQUIA" <?php if($row['form_pais']=='TURQUIA') echo 'selected'; ?>> TURQUIA </option>
              <option value="TUVALU" <?php if($row['form_pais']=='TUVALU') echo 'selected'; ?>> TUVALU </option>
              <option value="UCRANIA" <?php if($row['form_pais']=='UCRANIA') echo 'selected'; ?>> UCRANIA </option>
              <option value="UGANDA" <?php if($row['form_pais']=='UGANDA') echo 'selected'; ?>> UGANDA </option>
              <option value="UNION EUROPEA" <?php if($row['form_pais']=='UNION EUROPEA') echo 'selected'; ?>> UNION EUROPEA </option>
              <option value="URUGUAY" <?php if($row['form_pais']=='URUGUAY') echo 'selected'; ?>> URUGUAY </option>
              <option value="UZBEKISTAN" <?php if($row['form_pais']=='UZBEKISTAN') echo 'selected'; ?>> UZBEKISTAN </option>
              <option value="VANUATU" <?php if($row['form_pais']=='VANUATU') echo 'selected'; ?>> VANUATU </option>
              <option value="VENEZUELA" <?php if($row['form_pais']=='VENEZUELA') echo 'selected'; ?>> VENEZUELA </option>
              <option value="VIETNAM" <?php if($row['form_pais']=='VIETNAM') echo 'selected'; ?>> VIETNAM </option>
              <option value="WAKE ISLAND" <?php if($row['form_pais']=='WAKE ISLAND') echo 'selected'; ?>> WAKE ISLAND </option>
              <option value="WALLIS Y FUTUNA" <?php if($row['form_pais']=='WALLIS Y FUTUNA') echo 'selected'; ?>> WALLIS Y FUTUNA </option>
              <option value="WEST BANK" <?php if($row['form_pais']=='WEST BANK') echo 'selected'; ?>> WEST BANK </option>
              <option value="WORLD" <?php if($row['form_pais']=='WORLD') echo 'selected'; ?>> WORLD </option>
              <option value="YEMEN" <?php if($row['form_pais']=='YEMEN') echo 'selected'; ?>> YEMEN </option>
              <option value="YIBUTI" <?php if($row['form_pais']=='YIBUTI') echo 'selected'; ?>> YIBUTI </option>
              <option value="ZAMBIA" <?php if($row['form_pais']=='ZAMBIA') echo 'selected'; ?>> ZAMBIA </option>
              <option value="ZIMBABUE" <?php if($row['form_pais']=='SOLTERO') echo 'selected'; ?>> ZIMBABUE </option>
            </select>
          </div>
          <input type="submit" name="Submit" class="btn btn-info" value="GUARDAR">          
          <input type="button" name="nuevo" class="btn btn-info" value="REGRESAR" onclick="location.href='modif_titulos.php?id=<?php echo $row['form_colegiado_id']; ?>'"/>
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