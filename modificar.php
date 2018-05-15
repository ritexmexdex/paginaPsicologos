<?php
	require '../conexion.php';
	
	$id = $_GET['id'];
	//$id = 2;
	$sql = "SELECT
  per_id,
  per_colegiado_id,
  per_paterno,
  per_materno,
  per_nombres,
  per_nacimiento,
  per_pais_nac,
  per_ci,
  per_emision,
  per_estado_civil,
  per_telefono,
  per_celular1,
  per_celular2,
  per_correo,
  per_correo_institu,
  per_perfil,

  dom_id,
  dom_colegiado_id,
  dom_zona,
  dom_tipo_via,
  dom_via,
  dom_numero,
  dom_edificio,
  dom_bloque,
  dom_piso,
  dom_departamento,
    
  cons_id,
  cons_colegiado_id,
  cons_zona,
  cons_cavenida,
  cons_nro,
  cons_edificio,
  cons_bloque,
  cons_piso,
  cons_depto,
  cons_tlf_fijo,
  cons_hr_atencion,
  
  lic_id,
  lic_colegiado_id,
  lic_universidad,
  lic_pais,
  lic_titular,
  lic_fech_emi,
  lic_cod_titu,
  lic_folio,
  lic_nro_titu,
  lic_serie,
  lic_fech_titu,
  
  exp_id,
  exp_are_id,
  exp_aresp_id,
  exp_anios,
  exp_detalle,
  exp_descripcion
FROM
  psic_datos_personales,
  psic_consultorio,
  psic_domicilio,
  psic_experiencia,
  psic_licenciatura
WHERE
  per_colegiado_id='$id'
AND 
cons_colegiado_id='$id'
AND
dom_colegiado_id='$id'
AND
lic_colegiado_id='$id'
AND
exp_colegiado_id='$id'
LIMIT 1";
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
        <form method="POST" action="update.php">
          <input type="hidden" id="per_colegiado_id" name="per_colegiado_id" value="<?php echo $row['per_colegiado_id']; ?>" />
          <input type="hidden" id="per_id" name="per_id" value="<?php echo $row['per_id']; ?>" />
          <input type="hidden" id="cons_id" name="cons_id" value="<?php echo $row['cons_id']; ?>" />
          <input type="hidden" id="dom_id" name="dom_id" value="<?php echo $row['dom_id']; ?>" />
          <input type="hidden" id="lic_id" name="lic_id" value="<?php echo $row['lic_id']; ?>" />
          <input type="hidden" id="exp_id" name="exp_id" value="<?php echo $row['exp_id']; ?>" />
                    <hr/> 
<h4>DATOS PERSONALES</h4>
<hr/>
          <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" class="form-control" id="per_nombres" name="per_nombres" placeholder="Nombres" value="<?php echo $row['per_nombres']; ?>" required>
          </div>
          <div class="form-group">
            <label for="paterno">Primer Apellido</label>
            <input type="text" class="form-control" id="per_paterno" name="per_paterno" placeholder="Primer Apellido" value="<?php echo $row['per_paterno']; ?>" required>
          </div>
          <div class="form-group">
            <label for="materno">Segundo Apellido</label>
            <input type="text" class="form-control" id="per_materno" name="per_materno" placeholder="Segundo Apellido" value="<?php echo $row['per_materno']; ?>" required>
          </div>
           <div class="form-group">
            <label for="per_nacimiento">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="per_nacimiento" name="per_nacimiento" placeholder="Segundo Apellido" value="<?php echo $row['per_nacimiento']; ?>">
          </div>
          <div class="form-group">
            <label for="paisnac">Pa&iacute;s de Nacimiento</label>
            <select class="form-control" id="per_pais_nac" name="per_pais_nac">
              <option value="BOLIVIA" <?php if($row['per_pais_nac']=='BOLIVIA') echo 'selected'; ?>> BOLIVIA </option>
              <option value="AFGANISTAN" <?php if($row['per_pais_nac']=='AFGANISTAN') echo 'selected'; ?>> AFGANISTAN </option>
              <option value="AKROTIRI" <?php if($row['per_pais_nac']=='AKROTIRI') echo 'selected'; ?>> AKROTIRI </option>
              <option value="ALBANIA" <?php if($row['per_pais_nac']=='ALBANIA') echo 'selected'; ?>> ALBANIA </option>
              <option value="ALEMANIA" <?php if($row['per_pais_nac']=='ALEMANIA') echo 'selected'; ?>> ALEMANIA </option>
              <option value="ANDORRA" <?php if($row['per_pais_nac']=='ANDORRA') echo 'selected'; ?>> ANDORRA </option>
              <option value="ANGOLA" <?php if($row['per_pais_nac']=='ANGOLA') echo 'selected'; ?>> ANGOLA </option>
              <option value="ANGUILA" <?php if($row['per_pais_nac']=='ANGUILA') echo 'selected'; ?>> ANGUILA </option>
              <option value="ANTARTIDA" <?php if($row['per_pais_nac']=='ANTARTIDA') echo 'selected'; ?>> ANTARTIDA </option>
              <option value="ANTIGUA Y BARBUDA" <?php if($row['per_pais_nac']=='ANTIGUA Y BARBUDA') echo 'selected'; ?>> ANTIGUA Y BARBUDA </option>
              <option value="ANTILLAS NEERLANDESAS" <?php if($row['per_pais_nac']=='ANTILLAS NEERLANDESAS') echo 'selected'; ?>> ANTILLAS NEERLANDESAS </option>
              <option value="ARABIA SAUDI" <?php if($row['per_pais_nac']=='ARABIA SAUDI') echo 'selected'; ?>> ARABIA SAUDI </option>
              <option value="ARCTIC OCEAN" <?php if($row['per_pais_nac']=='ARCTIC OCEAN') echo 'selected'; ?>> ARCTIC OCEAN </option>
              <option value="ARGELIA" <?php if($row['per_pais_nac']=='ARGELIA') echo 'selected'; ?>> ARGELIA </option>
              <option value="ARGENTINA" <?php if($row['per_pais_nac']=='ARGENTINA') echo 'selected'; ?>> ARGENTINA </option>
              <option value="ARMENIA" <?php if($row['per_pais_nac']=='ARMENIA') echo 'selected'; ?>> ARMENIA </option>
              <option value="ARUBA" <?php if($row['per_pais_nac']=='ARUBA') echo 'selected'; ?>> ARUBA </option>
              <option value="ASHMORE ANDCARTIER ISLANDS" <?php if($row['per_pais_nac']=='ASHMORE ANDCARTIER ISLANDS') echo 'selected'; ?>> ASHMORE ANDCARTIER ISLANDS </option>
              <option value="ATLANTIC OCEAN" <?php if($row['per_pais_nac']=='ATLANTIC OCEAN') echo 'selected'; ?>> ATLANTIC OCEAN </option>
              <option value="AUSTRALIA" <?php if($row['per_pais_nac']=='AUSTRALIA') echo 'selected'; ?>> AUSTRALIA </option>
              <option value="AUSTRIA" <?php if($row['per_pais_nac']=='AUSTRIA') echo 'selected'; ?>> AUSTRIA </option>
              <option value="AZERBAIYAN" <?php if($row['per_pais_nac']=='AZERBAIYAN') echo 'selected'; ?>> AZERBAIYAN </option>
              <option value="BAHAMAS" <?php if($row['per_pais_nac']=='BAHAMAS') echo 'selected'; ?>> BAHAMAS </option>
              <option value="BAHRAIN" <?php if($row['per_pais_nac']=='BAHRAIN') echo 'selected'; ?>> BAHRAIN </option>
              <option value="BANGLADESH" <?php if($row['per_pais_nac']=='BANGLADESH') echo 'selected'; ?>> BANGLADESH </option>
              <option value="BARBADOS" <?php if($row['per_pais_nac']=='BARBADOS') echo 'selected'; ?>> BARBADOS </option>
              <option value="BELGICA" <?php if($row['per_pais_nac']=='BELGICA') echo 'selected'; ?>> BELGICA </option>
              <option value="BELICE" <?php if($row['per_pais_nac']=='BELICE') echo 'selected'; ?>> BELICE </option>
              <option value="BENIN" <?php if($row['per_pais_nac']=='BENIN') echo 'selected'; ?>> BENIN </option>
              <option value="BERMUDAS" <?php if($row['per_pais_nac']=='BERMUDAS') echo 'selected'; ?>> BERMUDAS </option>
              <option value="BIELORRUSIA" <?php if($row['per_pais_nac']=='BIELORRUSIA') echo 'selected'; ?>> BIELORRUSIA </option>
              <option value="BIRMANIA MYANMAR" <?php if($row['per_pais_nac']=='BIRMANIA MYANMAR') echo 'selected'; ?>> BIRMANIA MYANMAR </option>
              
              <option value="BOSNIA Y HERCEGOVINA" <?php if($row['per_pais_nac']=='BOSNIA Y HERCEGOVINA') echo 'selected'; ?>> BOSNIA Y HERCEGOVINA </option>
              <option value="BOTSUANA" <?php if($row['per_pais_nac']=='BOTSUANA') echo 'selected'; ?>> BOTSUANA </option>
              <option value="BRASIL" <?php if($row['per_pais_nac']=='BRASIL') echo 'selected'; ?>> BRASIL </option>
              <option value="BRUNEI" <?php if($row['per_pais_nac']=='BRUNEI') echo 'selected'; ?>> BRUNEI </option>
              <option value="BULGARIA" <?php if($row['per_pais_nac']=='BULGARIA') echo 'selected'; ?>> BULGARIA </option>
              <option value="BURKINA FASO" <?php if($row['per_pais_nac']=='BURKINA FASO') echo 'selected'; ?>> BURKINA FASO </option>
              <option value="BURUNDI" <?php if($row['per_pais_nac']=='BURUNDI') echo 'selected'; ?>> BURUNDI </option>
              <option value="BUTAN" <?php if($row['per_pais_nac']=='BUTAN') echo 'selected'; ?>> BUTAN </option>
              <option value="CABO VERDE" <?php if($row['per_pais_nac']=='CABO VERDE') echo 'selected'; ?>> CABO VERDE </option>
              <option value="CAMBOYA" <?php if($row['per_pais_nac']=='CAMBOYA') echo 'selected'; ?>> CAMBOYA </option>
              <option value="CAMERUN" <?php if($row['per_pais_nac']=='CAMERUN') echo 'selected'; ?>> CAMERUN </option>
              <option value="CANADA" <?php if($row['per_pais_nac']=='CANADA') echo 'selected'; ?>> CANADA </option>
              <option value="CHAD" <?php if($row['per_pais_nac']=='CHAD') echo 'selected'; ?>> CHAD </option>
              <option value="CHILE" <?php if($row['per_pais_nac']=='CHILE') echo 'selected'; ?>> CHILE </option>
              <option value="CHINA" <?php if($row['per_pais_nac']=='CHINA') echo 'selected'; ?>> CHINA </option>
              <option value="CHIPRE" <?php if($row['per_pais_nac']=='CHIPRE') echo 'selected'; ?>> CHIPRE </option>
              <option value="CLIPPERTON ISLAND" <?php if($row['per_pais_nac']=='CLIPPERTON ISLAND') echo 'selected'; ?>> CLIPPERTON ISLAND </option>
              <option value="COLOMBIA" <?php if($row['per_pais_nac']=='COLOMBIA') echo 'selected'; ?>> COLOMBIA </option>
              <option value="COMORAS" <?php if($row['per_pais_nac']=='COMORAS') echo 'selected'; ?>> COMORAS </option>
              <option value="CONGO" <?php if($row['per_pais_nac']=='CONGO') echo 'selected'; ?>> CONGO </option>
              <option value="CORAL SEA ISLANDS" <?php if($row['per_pais_nac']=='CORAL SEA ISLANDS') echo 'selected'; ?>> CORAL SEA ISLANDS </option>
              <option value="COREA DEL NORTE" <?php if($row['per_pais_nac']=='COREA DEL NORTE') echo 'selected'; ?>> COREA DEL NORTE </option>
              <option value="COREA DEL SUR" <?php if($row['per_pais_nac']=='COREA DEL SUR') echo 'selected'; ?>> COREA DEL SUR </option>
              <option value="COSTA DE MARFIL" <?php if($row['per_pais_nac']=='COSTA DE MARFIL') echo 'selected'; ?>> COSTA DE MARFIL </option>
              <option value="COSTA RICA" <?php if($row['per_pais_nac']=='COSTA RICA') echo 'selected'; ?>> COSTA RICA </option>
              <option value="CROACIA" <?php if($row['per_pais_nac']=='CROACIA') echo 'selected'; ?>> CROACIA </option>
              <option value="CUBA" <?php if($row['per_pais_nac']=='CUBA') echo 'selected'; ?>> CUBA </option>
              <option value="DHEKELIA" <?php if($row['per_pais_nac']=='DHEKELIA') echo 'selected'; ?>> DHEKELIA </option>
              <option value="DINAMARCA" <?php if($row['per_pais_nac']=='DINAMARCA') echo 'selected'; ?>> DINAMARCA </option>
              <option value="DOMINICA" <?php if($row['per_pais_nac']=='DOMINICA') echo 'selected'; ?>> DOMINICA </option>
              <option value="ECUADOR" <?php if($row['per_pais_nac']=='ECUADOR') echo 'selected'; ?>> ECUADOR </option>
              <option value="EGIPTO" <?php if($row['per_pais_nac']=='EGIPTO') echo 'selected'; ?>> EGIPTO </option>
              <option value="EL SALVADOR" <?php if($row['per_pais_nac']=='EL SALVADOR') echo 'selected'; ?>> EL SALVADOR </option>
              <option value="EL VATICANO" <?php if($row['per_pais_nac']=='EL VATICANO') echo 'selected'; ?>> EL VATICANO </option>
              <option value="EMIRATOS ARABES UNIDOS" <?php if($row['per_pais_nac']=='EMIRATOS ARABES UNIDOS') echo 'selected'; ?>> EMIRATOS ARABES UNIDOS </option>
              <option value="ERITREA" <?php if($row['per_pais_nac']=='ERITREA') echo 'selected'; ?>> ERITREA </option>
              <option value="ESLOVAQUIA" <?php if($row['per_pais_nac']=='ESLOVAQUIA') echo 'selected'; ?>> ESLOVAQUIA </option>
              <option value="ESLOVENIA" <?php if($row['per_pais_nac']=='ESLOVENIA') echo 'selected'; ?>> ESLOVENIA </option>
              <option value="ESPAÑA" <?php if($row['per_pais_nac']=='ESPAÑA') echo 'selected'; ?>> ESPAÑA </option>
              <option value="ESTADOS UNIDOS" <?php if($row['per_pais_nac']=='ESTADOS UNIDOS') echo 'selected'; ?>> ESTADOS UNIDOS </option>
              <option value="ESTONIA" <?php if($row['per_pais_nac']=='ESTONIA') echo 'selected'; ?>> ESTONIA </option>
              <option value="ETIOPIA" <?php if($row['per_pais_nac']=='ETIOPIA') echo 'selected'; ?>> ETIOPIA </option>
              <option value="FILIPINAS" <?php if($row['per_pais_nac']=='FILIPINAS') echo 'selected'; ?>> FILIPINAS </option>
              <option value="FINLANDIA" <?php if($row['per_pais_nac']=='FINLANDIA') echo 'selected'; ?>> FINLANDIA </option>
              <option value="FIYI" <?php if($row['per_pais_nac']=='FIYI') echo 'selected'; ?>> FIYI </option>
              <option value="FRANCIA" <?php if($row['per_pais_nac']=='FRANCIA') echo 'selected'; ?>> FRANCIA </option>
              <option value="GABON" <?php if($row['per_pais_nac']=='GABON') echo 'selected'; ?>> GABON </option>
              <option value="GAMBIA" <?php if($row['per_pais_nac']=='GAMBIA') echo 'selected'; ?>> GAMBIA </option>
              <option value="GAZA STRIP" <?php if($row['per_pais_nac']=='GAZA STRIP') echo 'selected'; ?>> GAZA STRIP </option>
              <option value="GEORGIA" <?php if($row['per_pais_nac']=='GEORGIA') echo 'selected'; ?>> GEORGIA </option>
              <option value="GHANA" <?php if($row['per_pais_nac']=='GHANA') echo 'selected'; ?>> GHANA </option>
              <option value="GIBRALTAR" <?php if($row['per_pais_nac']=='GIBRALTAR') echo 'selected'; ?>> GIBRALTAR </option>
              <option value="GRANADA" <?php if($row['per_pais_nac']=='GRANADA') echo 'selected'; ?>> GRANADA </option>
              <option value="GRECIA" <?php if($row['per_pais_nac']=='GRECIA') echo 'selected'; ?>> GRECIA </option>
              <option value="GROENLANDIA" <?php if($row['per_pais_nac']=='GROENLANDIA') echo 'selected'; ?>> GROENLANDIA </option>
              <option value="GUAM" <?php if($row['per_pais_nac']=='GUAM') echo 'selected'; ?>> GUAM </option>
              <option value="GUATEMALA" <?php if($row['per_pais_nac']=='GUATEMALA') echo 'selected'; ?>> GUATEMALA </option>
              <option value="GUERNSEY" <?php if($row['per_pais_nac']=='GUERNSEY') echo 'selected'; ?>> GUERNSEY </option>
              <option value="GUINEA" <?php if($row['per_pais_nac']=='GUINEA') echo 'selected'; ?>> GUINEA </option>
              <option value="GUINEA ECUATORIAL" <?php if($row['per_pais_nac']=='GUINEA ECUATORIAL') echo 'selected'; ?>> GUINEA ECUATORIAL </option>
              <option value="GUINEA-BISSAU" <?php if($row['per_pais_nac']=='GUINEA-BISSAU') echo 'selected'; ?>> GUINEA-BISSAU </option>
              <option value="GUYANA" <?php if($row['per_pais_nac']=='GUYANA') echo 'selected'; ?>> GUYANA </option>
              <option value="HAITI" <?php if($row['per_pais_nac']=='HAITI') echo 'selected'; ?>> HAITI </option>
              <option value="HONDURAS" <?php if($row['per_pais_nac']=='HONDURAS') echo 'selected'; ?>> HONDURAS </option>
              <option value="HONG KONG" <?php if($row['per_pais_nac']=='HONG KONG') echo 'selected'; ?>> HONG KONG </option>
              <option value="HUNGRIA" <?php if($row['per_pais_nac']=='HUNGRIA') echo 'selected'; ?>> HUNGRIA </option>
              <option value="INDIA" <?php if($row['per_pais_nac']=='INDIA') echo 'selected'; ?>> INDIA </option>
              <option value="INDIAN OCEAN" <?php if($row['per_pais_nac']=='INDIAN OCEAN') echo 'selected'; ?>> INDIAN OCEAN </option>
              <option value="INDONESIA" <?php if($row['per_pais_nac']=='INDONESIA') echo 'selected'; ?>> INDONESIA </option>
              <option value="IRAN" <?php if($row['per_pais_nac']=='IRAN') echo 'selected'; ?>> IRAN </option>
              <option value="IRAQ" <?php if($row['per_pais_nac']=='IRAQ') echo 'selected'; ?>> IRAQ </option>
              <option value="IRLANDA" <?php if($row['per_pais_nac']=='IRLANDA') echo 'selected'; ?>> IRLANDA </option>
              <option value="ISLA BOUVET" <?php if($row['per_pais_nac']=='ISLA BOUVET') echo 'selected'; ?>> ISLA BOUVET </option>
              <option value="ISLA CHRISTMAS" <?php if($row['per_pais_nac']=='ISLA CHRISTMAS') echo 'selected'; ?>> ISLA CHRISTMAS </option>
              <option value="ISLA NORFOLK" <?php if($row['per_pais_nac']=='ISLA NORFOLK') echo 'selected'; ?>> ISLA NORFOLK </option>
              <option value="ISLANDIA" <?php if($row['per_pais_nac']=='ISLANDIA') echo 'selected'; ?>> ISLANDIA </option>
              <option value="ISLAS CAIMAN" <?php if($row['per_pais_nac']=='ISLAS CAIMAN') echo 'selected'; ?>> ISLAS CAIMAN </option>
              <option value="ISLAS COCOS" <?php if($row['per_pais_nac']=='ISLAS COCOS') echo 'selected'; ?>> ISLAS COCOS </option>
              <option value="ISLAS COOK" <?php if($row['per_pais_nac']=='ISLAS COOK') echo 'selected'; ?>> ISLAS COOK </option>
              <option value="ISLAS FEROE" <?php if($row['per_pais_nac']=='ISLAS FEROE') echo 'selected'; ?>> ISLAS FEROE </option>
              <option value="ISLAS GEORGIA DEL SUR Y SANDWICH DEL SUR" <?php if($row['per_pais_nac']=='ISLAS GEORGIA DEL SUR Y SANDWICH DEL SUR') echo 'selected'; ?>> ISLAS GEORGIA DEL SUR Y SANDWICH DEL SUR </option>
              <option value="ISLAS HEARD Y MCDONALD" <?php if($row['per_pais_nac']=='SOLTERO') echo 'ISLAS HEARD Y MCDONALD'; ?>> ISLAS HEARD Y MCDONALD </option>
              <option value="ISLAS MALVINAS" <?php if($row['per_pais_nac']=='ISLAS MALVINAS') echo 'selected'; ?>> ISLAS MALVINAS </option>
              <option value="ISLAS MARIANAS DEL NORTE" <?php if($row['per_pais_nac']=='ISLAS MARIANAS DEL NORTE') echo 'selected'; ?>> ISLAS MARIANAS DEL NORTE </option>
              <option value="ISLASMARSHALL" <?php if($row['per_pais_nac']=='ISLASMARSHALL') echo 'selected'; ?>> ISLASMARSHALL </option>
              <option value="ISLAS PITCAIRN" <?php if($row['per_pais_nac']=='ISLAS PITCAIRN') echo 'selected'; ?>> ISLAS PITCAIRN </option>
              <option value="ISLAS SALOMON" <?php if($row['per_pais_nac']=='ISLAS SALOMON') echo 'selected'; ?>> ISLAS SALOMON </option>
              <option value="ISLAS TURCAS Y CAICOS" <?php if($row['per_pais_nac']=='ISLAS TURCAS Y CAICOS') echo 'selected'; ?>> ISLAS TURCAS Y CAICOS </option>
              <option value="ISLAS VIRGENES AMERICANAS" <?php if($row['per_pais_nac']=='ISLAS VIRGENES AMERICANAS') echo 'selected'; ?>> ISLAS VIRGENES AMERICANAS </option>
              <option value="ISLAS VIRGENES BRITANICAS" <?php if($row['per_pais_nac']=='ISLAS VIRGENES BRITANICAS') echo 'selected'; ?>> ISLAS VIRGENES BRITANICAS </option>
              <option value="ISRAEL" <?php if($row['per_pais_nac']=='ISRAEL') echo 'selected'; ?>> ISRAEL </option>
              <option value="ITALIA" <?php if($row['per_pais_nac']=='ITALIA') echo 'selected'; ?>> ITALIA </option>
              <option value="JAMAICA" <?php if($row['per_pais_nac']=='JAMAICA') echo 'selected'; ?>> JAMAICA </option>
              <option value="JAN MAYEN" <?php if($row['per_pais_nac']=='JAN MAYEN') echo 'selected'; ?>> JAN MAYEN </option>
              <option value="JAPON" <?php if($row['per_pais_nac']=='JAPON') echo 'selected'; ?>> JAPON </option>
              <option value="JERSEY" <?php if($row['per_pais_nac']=='JERSEY') echo 'selected'; ?>> JERSEY </option>
              <option value="JORDANIA" <?php if($row['per_pais_nac']=='JORDANIA') echo 'selected'; ?>> JORDANIA </option>
              <option value="KAZAJISTAN" <?php if($row['per_pais_nac']=='KAZAJISTAN') echo 'selected'; ?>> KAZAJISTAN </option>
              <option value="KENIA" <?php if($row['per_pais_nac']=='KENIA') echo 'selected'; ?>> KENIA </option>
              <option value="KIRGUIZISTAN" <?php if($row['per_pais_nac']=='KIRGUIZISTAN') echo 'selected'; ?>> KIRGUIZISTAN </option>
              <option value="KIRIBATI" <?php if($row['per_pais_nac']=='KIRIBATI') echo 'selected'; ?>> KIRIBATI </option>
              <option value="KUWAIT" <?php if($row['per_pais_nac']=='KUWAIT') echo 'selected'; ?>> KUWAIT </option>
              <option value="LAOS" <?php if($row['per_pais_nac']=='LAOS') echo 'selected'; ?>> LAOS </option>
              <option value="LESOTO" <?php if($row['per_pais_nac']=='LESOTO') echo 'selected'; ?>> LESOTO </option>
              <option value="LETONIA" <?php if($row['per_pais_nac']=='LETONIA') echo 'selected'; ?>> LETONIA </option>
              <option value="LIBANO" <?php if($row['per_pais_nac']=='LIBANO') echo 'selected'; ?>> LIBANO </option>
              <option value="LIBERIA" <?php if($row['per_pais_nac']=='LIBERIA') echo 'selected'; ?>> LIBERIA </option>
              <option value="LIBIA" <?php if($row['per_pais_nac']=='LIBIA') echo 'selected'; ?>> LIBIA </option>
              <option value="LIECHTENSTEIN" <?php if($row['per_pais_nac']=='LIECHTENSTEIN') echo 'selected'; ?>> LIECHTENSTEIN </option>
              <option value="LITUANIA" <?php if($row['per_pais_nac']=='LITUANIA') echo 'selected'; ?>> LITUANIA </option>
              <option value="LUXEMBURGO" <?php if($row['per_pais_nac']=='LUXEMBURGO') echo 'selected'; ?>> LUXEMBURGO </option>
              <option value="MACAO" <?php if($row['per_pais_nac']=='MACAO') echo 'selected'; ?>> MACAO </option>
              <option value="MACEDONIA" <?php if($row['per_pais_nac']=='MACEDONIA') echo 'selected'; ?>> MACEDONIA </option>
              <option value="MADAGASCAR" <?php if($row['per_pais_nac']=='MADAGASCAR') echo 'selected'; ?>> MADAGASCAR </option>
              <option value="MALASIA" <?php if($row['per_pais_nac']=='MALASIA') echo 'selected'; ?>> MALASIA </option>
              <option value="MALAUI" <?php if($row['per_pais_nac']=='MALAUI') echo 'selected'; ?>> MALAUI </option>
              <option value="MALDIVAS" <?php if($row['per_pais_nac']=='MALDIVAS') echo 'selected'; ?>> MALDIVAS </option>
              <option value="MALI" <?php if($row['per_pais_nac']=='MALI') echo 'selected'; ?>> MALI </option>
              <option value="MALTA" <?php if($row['per_pais_nac']=='MALTA') echo 'selected'; ?>> MALTA </option>
              <option value="MAN, ISLE OF" <?php if($row['per_pais_nac']=='MAN, ISLE OF') echo 'selected'; ?>> MAN, ISLE OF </option>
              <option value="MARRUECOS" <?php if($row['per_pais_nac']=='MARRUECOS') echo 'selected'; ?>> MARRUECOS </option>
              <option value="MAURICIO" <?php if($row['per_pais_nac']=='MAURICIO') echo 'selected'; ?>> MAURICIO </option>
              <option value="MAURITANIA" <?php if($row['per_pais_nac']=='MAURITANIA') echo 'selected'; ?>> MAURITANIA </option>
              <option value="MAYOTTE" <?php if($row['per_pais_nac']=='MAYOTTE') echo 'selected'; ?>> MAYOTTE </option>
              <option value="MEXICO" <?php if($row['per_pais_nac']=='MEXICO') echo 'selected'; ?>> MEXICO </option>
              <option value="MICRONESIA" <?php if($row['per_pais_nac']=='MICRONESIA') echo 'selected'; ?>> MICRONESIA </option>
              <option value="MOLDAVIA" <?php if($row['per_pais_nac']=='MOLDAVIA') echo 'selected'; ?>> MOLDAVIA </option>
              <option value="MONACO" <?php if($row['per_pais_nac']=='MONACO') echo 'selected'; ?>> MONACO </option>
              <option value="MONGOLIA" <?php if($row['per_pais_nac']=='MONGOLIA') echo 'selected'; ?>> MONGOLIA </option>
              <option value="MONTSERRAT" <?php if($row['per_pais_nac']=='MONTSERRAT') echo 'selected'; ?>> MONTSERRAT </option>
              <option value="MOZAMBIQUE" <?php if($row['per_pais_nac']=='MOZAMBIQUE') echo 'selected'; ?>> MOZAMBIQUE </option>
              <option value="NAMIBIA" <?php if($row['per_pais_nac']=='NAMIBIA') echo 'selected'; ?>> NAMIBIA </option>
              <option value="NAURU" <?php if($row['per_pais_nac']=='NAURU') echo 'selected'; ?>> NAURU </option>
              <option value="NAVASSA ISLAND" <?php if($row['per_pais_nac']=='NAVASSA ISLAND') echo 'selected'; ?>> NAVASSA ISLAND </option>
              <option value="NEPAL" <?php if($row['per_pais_nac']=='NEPAL') echo 'selected'; ?>> NEPAL </option>
              <option value="NICARAGUA" <?php if($row['per_pais_nac']=='NICARAGUA') echo 'selected'; ?>> NICARAGUA </option>
              <option value="NIGER" <?php if($row['per_pais_nac']=='NIGER') echo 'selected'; ?>> NIGER </option>
              <option value="NIGERIA" <?php if($row['per_pais_nac']=='NIGERIA') echo 'selected'; ?>> NIGERIA </option>
              <option value="NIUE" <?php if($row['per_pais_nac']=='NIUE') echo 'selected'; ?>> NIUE </option>
              <option value="NORUEGA" <?php if($row['per_pais_nac']=='NORUEGA') echo 'selected'; ?>> NORUEGA </option>
              <option value="NUEVA CALEDONIA" <?php if($row['per_pais_nac']=='NUEVA CALEDONIA') echo 'selected'; ?>> NUEVA CALEDONIA </option>
              <option value="NUEVA ZELANDA" <?php if($row['per_pais_nac']=='NUEVA ZELANDA') echo 'selected'; ?>> NUEVA ZELANDA </option>
              <option value="OMAN" <?php if($row['per_pais_nac']=='OMAN') echo 'selected'; ?>> OMAN </option>
              <option value="PACIFIC OCEAN" <?php if($row['per_pais_nac']=='PACIFIC OCEAN') echo 'selected'; ?>> PACIFIC OCEAN </option>
              <option value="PAISES BAJOS" <?php if($row['per_pais_nac']=='PAISES BAJOS') echo 'selected'; ?>> PAISES BAJOS </option>
              <option value="PAKISTAN" <?php if($row['per_pais_nac']=='PAKISTAN') echo 'selected'; ?>> PAKISTAN </option>
              <option value="PALAOS" <?php if($row['per_pais_nac']=='PALAOS') echo 'selected'; ?>> PALAOS </option>
              <option value="PANAMA" <?php if($row['per_pais_nac']=='PANAMA') echo 'selected'; ?>> PANAMA </option>
              <option value="PAPUA-NUEVA GUINEA" <?php if($row['per_pais_nac']=='PAPUA-NUEVA GUINEA') echo 'selected'; ?>> PAPUA-NUEVA GUINEA </option>
              <option value="PARACEL ISLANDS" <?php if($row['per_pais_nac']=='PARACEL ISLANDS') echo 'selected'; ?>> PARACEL ISLANDS </option>
              <option value="PARAGUAY" <?php if($row['per_pais_nac']=='PARAGUAY') echo 'selected'; ?>> PARAGUAY </option>
              <option value="PERU" <?php if($row['per_pais_nac']=='PERU') echo 'selected'; ?>> PERU </option>
              <option value="POLINESIA FRANCESA" <?php if($row['per_pais_nac']=='POLINESIA FRANCESA') echo 'selected'; ?>> POLINESIA FRANCESA </option>
              <option value="POLONIA" <?php if($row['per_pais_nac']=='POLONIA') echo 'selected'; ?>> POLONIA </option>
              <option value="PORTUGAL" <?php if($row['per_pais_nac']=='PORTUGAL') echo 'selected'; ?>> PORTUGAL </option>
              <option value="PUERTO RICO" <?php if($row['per_pais_nac']=='PUERTO RICO') echo 'selected'; ?>> PUERTO RICO </option>
              <option value="QATAR" <?php if($row['per_pais_nac']=='QATAR') echo 'selected'; ?>> QATAR </option>
              <option value="REINO UNIDO" <?php if($row['per_pais_nac']=='REINO UNIDO') echo 'selected'; ?>> REINO UNIDO </option>
              <option value="REPUBLICA CENTROAFRICANA" <?php if($row['per_pais_nac']=='REPUBLICA CENTROAFRICANA') echo 'selected'; ?>> REPUBLICA CENTROAFRICANA </option>
              <option value="REPUBLICA CHECA" <?php if($row['per_pais_nac']=='REPUBLICA CHECA') echo 'selected'; ?>> REPUBLICA CHECA </option>
              <option value="REPUBLICA DEMOCRATICA DEL CONGO" <?php if($row['per_pais_nac']=='REPUBLICA DEMOCRATICA DEL CONGO') echo 'selected'; ?>> REPUBLICA DEMOCRATICA DEL CONGO </option>
              <option value="REPUBLICA DOMINICANA" <?php if($row['per_pais_nac']=='REPUBLICA DOMINICANA') echo 'selected'; ?>> REPUBLICA DOMINICANA </option>
              <option value="RUANDA" <?php if($row['per_pais_nac']=='RUANDA') echo 'selected'; ?>> RUANDA </option>
              <option value="RUMANIA" <?php if($row['per_pais_nac']=='RUMANIA') echo 'selected'; ?>> RUMANIA </option>
              <option value="RUSIA" <?php if($row['per_pais_nac']=='RUSIA') echo 'selected'; ?>> RUSIA </option>
              <option value="SAHARA OCCIDENTAL" <?php if($row['per_pais_nac']=='SAHARA OCCIDENTAL') echo 'selected'; ?>> SAHARA OCCIDENTAL </option>
              <option value="SAMOA" <?php if($row['per_pais_nac']=='SAMOA') echo 'selected'; ?>> SAMOA </option>
              <option value="SAMOA AMERICANA" <?php if($row['per_pais_nac']=='SAMOA AMERICANA') echo 'selected'; ?>> SAMOA AMERICANA </option>
              <option value="SAN CRISTOBAL Y NIEVES" <?php if($row['per_pais_nac']=='SAN CRISTOBAL Y NIEVES') echo 'selected'; ?>> SAN CRISTOBAL Y NIEVES </option>
              <option value="SAN MARINO" <?php if($row['per_pais_nac']=='SAN MARINO') echo 'selected'; ?>> SAN MARINO </option>
              <option value="SAN PEDRO Y MIQUELON" <?php if($row['per_pais_nac']=='SAN PEDRO Y MIQUELON') echo 'selected'; ?>> SAN PEDRO Y MIQUELON </option>
              <option value="SAN VICENTE Y LAS GRANADINAS" <?php if($row['per_pais_nac']=='SAN VICENTE Y LAS GRANADINAS') echo 'selected'; ?>> SAN VICENTE Y LAS GRANADINAS </option>
              <option value="SANTA HELENA" <?php if($row['per_pais_nac']=='SANTA HELENA') echo 'selected'; ?>> SANTA HELENA </option>
              <option value="SANTA LUCIA" <?php if($row['per_pais_nac']=='SANTA LUCIA') echo 'selected'; ?>> SANTA LUCIA </option>
              <option value="SANTO TOME Y PRINCIPE" <?php if($row['per_pais_nac']=='SANTO TOME Y PRINCIPE') echo 'selected'; ?>> SANTO TOME Y PRINCIPE </option>
              <option value="SENEGAL" <?php if($row['per_pais_nac']=='SENEGAL') echo 'selected'; ?>> SENEGAL </option>
              <option value="SEYCHELLES" <?php if($row['per_pais_nac']=='SEYCHELLES') echo 'selected'; ?>> SEYCHELLES </option>
              <option value="SIERRA LEONA" <?php if($row['per_pais_nac']=='SIERRA LEONA') echo 'selected'; ?>> SIERRA LEONA </option>
              <option value="SINGAPUR" <?php if($row['per_pais_nac']=='SINGAPUR') echo 'selected'; ?>> SINGAPUR </option>
              <option value="SIRIA" <?php if($row['per_pais_nac']=='SIRIA') echo 'selected'; ?>> SIRIA </option>
              <option value="SOMALIA" <?php if($row['per_pais_nac']=='SOMALIA') echo 'selected'; ?>> SOMALIA </option>
              <option value="SOUTHERN OCEAN" <?php if($row['per_pais_nac']=='SOUTHERN OCEAN') echo 'selected'; ?>> SOUTHERN OCEAN </option>
              <option value="SPRATLY ISLANDS" <?php if($row['per_pais_nac']=='SPRATLY ISLANDS') echo 'selected'; ?>> SPRATLY ISLANDS </option>
              <option value="SRI LANKA" <?php if($row['per_pais_nac']=='SRI LANKA') echo 'selected'; ?>> SRI LANKA </option>
              <option value="SUAZILANDIA" <?php if($row['per_pais_nac']=='SUAZILANDIA') echo 'selected'; ?>> SUAZILANDIA </option>
              <option value="SUDAFRICA" <?php if($row['per_pais_nac']=='SUDAFRICA') echo 'selected'; ?>> SUDAFRICA </option>
              <option value="SUDAN" <?php if($row['per_pais_nac']=='SUDAN') echo 'selected'; ?>> SUDAN </option>
              <option value="SUECIA" <?php if($row['per_pais_nac']=='SUECIA') echo 'selected'; ?>> SUECIA </option>
              <option value="SUIZA" <?php if($row['per_pais_nac']=='SUIZA') echo 'selected'; ?>> SUIZA </option>
              <option value="SURINAM" <?php if($row['per_pais_nac']=='SURINAM') echo 'selected'; ?>> SURINAM </option>
              <option value="SVALBARD Y JAN MAYEN" <?php if($row['per_pais_nac']=='SVALBARD Y JAN MAYEN') echo 'selected'; ?>> SVALBARD Y JAN MAYEN </option>
              <option value="TAILANDIA" <?php if($row['per_pais_nac']=='TAILANDIA') echo 'selected'; ?>> TAILANDIA </option>
              <option value="TAIWAN" <?php if($row['per_pais_nac']=='TAIWAN') echo 'selected'; ?>> TAIWAN </option>
              <option value="TANZANIA" <?php if($row['per_pais_nac']=='TANZANIA') echo 'selected'; ?>> TANZANIA </option>
              <option value="TAYIKISTAN" <?php if($row['per_pais_nac']=='TAYIKISTAN') echo 'selected'; ?>> TAYIKISTAN </option>
              <option value="TERRITORIOBRITANICODEL OCEANO INDICO" <?php if($row['per_pais_nac']=='TERRITORIOBRITANICODEL OCEANO INDICO') echo 'selected'; ?>> TERRITORIOBRITANICODEL OCEANO INDICO </option>
              <option value="TERRITORIOS AUSTRALES FRANCESES" <?php if($row['per_pais_nac']=='TERRITORIOS AUSTRALES FRANCESES') echo 'selected'; ?>> TERRITORIOS AUSTRALES FRANCESES </option>
              <option value="TIMOR ORIENTAL" <?php if($row['per_pais_nac']=='TIMOR ORIENTAL') echo 'selected'; ?>> TIMOR ORIENTAL </option>
              <option value="TOGO" <?php if($row['per_pais_nac']=='TOGO') echo 'selected'; ?>> TOGO </option>
              <option value="TOKELAU" <?php if($row['per_pais_nac']=='TOKELAU') echo 'selected'; ?>> TOKELAU </option>
              <option value="TONGA" <?php if($row['per_pais_nac']=='TONGA') echo 'selected'; ?>> TONGA </option>
              <option value="TRINIDAD Y TOBAGO" <?php if($row['per_pais_nac']=='TRINIDAD Y TOBAGO') echo 'selected'; ?>> TRINIDAD Y TOBAGO </option>
              <option value="TUNEZ" <?php if($row['per_pais_nac']=='TUNEZ') echo 'selected'; ?>> TUNEZ </option>
              <option value="TURKMENISTAN" <?php if($row['per_pais_nac']=='TURKMENISTAN') echo 'selected'; ?>> TURKMENISTAN </option>
              <option value="TURQUIA" <?php if($row['per_pais_nac']=='TURQUIA') echo 'selected'; ?>> TURQUIA </option>
              <option value="TUVALU" <?php if($row['per_pais_nac']=='TUVALU') echo 'selected'; ?>> TUVALU </option>
              <option value="UCRANIA" <?php if($row['per_pais_nac']=='UCRANIA') echo 'selected'; ?>> UCRANIA </option>
              <option value="UGANDA" <?php if($row['per_pais_nac']=='UGANDA') echo 'selected'; ?>> UGANDA </option>
              <option value="UNION EUROPEA" <?php if($row['per_pais_nac']=='UNION EUROPEA') echo 'selected'; ?>> UNION EUROPEA </option>
              <option value="URUGUAY" <?php if($row['per_pais_nac']=='URUGUAY') echo 'selected'; ?>> URUGUAY </option>
              <option value="UZBEKISTAN" <?php if($row['per_pais_nac']=='UZBEKISTAN') echo 'selected'; ?>> UZBEKISTAN </option>
              <option value="VANUATU" <?php if($row['per_pais_nac']=='VANUATU') echo 'selected'; ?>> VANUATU </option>
              <option value="VENEZUELA" <?php if($row['per_pais_nac']=='VENEZUELA') echo 'selected'; ?>> VENEZUELA </option>
              <option value="VIETNAM" <?php if($row['per_pais_nac']=='VIETNAM') echo 'selected'; ?>> VIETNAM </option>
              <option value="WAKE ISLAND" <?php if($row['per_pais_nac']=='WAKE ISLAND') echo 'selected'; ?>> WAKE ISLAND </option>
              <option value="WALLIS Y FUTUNA" <?php if($row['per_pais_nac']=='WALLIS Y FUTUNA') echo 'selected'; ?>> WALLIS Y FUTUNA </option>
              <option value="WEST BANK" <?php if($row['per_pais_nac']=='WEST BANK') echo 'selected'; ?>> WEST BANK </option>
              <option value="WORLD" <?php if($row['per_pais_nac']=='WORLD') echo 'selected'; ?>> WORLD </option>
              <option value="YEMEN" <?php if($row['per_pais_nac']=='YEMEN') echo 'selected'; ?>> YEMEN </option>
              <option value="YIBUTI" <?php if($row['per_pais_nac']=='YIBUTI') echo 'selected'; ?>> YIBUTI </option>
              <option value="ZAMBIA" <?php if($row['per_pais_nac']=='ZAMBIA') echo 'selected'; ?>> ZAMBIA </option>
              <option value="ZIMBABUE" <?php if($row['per_pais_nac']=='SOLTERO') echo 'selected'; ?>> ZIMBABUE </option>
            </select>
          </div>
          <div class="form-group">
            <label for="per_estado_civil">Estado Civil</label>
            <select class="form-control" id="per_estado_civil" name="per_estado_civil">
              <option value="SOLTERO(A)" <?php if($row['per_estado_civil']=='SOLTERO(A)') echo 'selected'; ?>>SOLTERO(A)</option>
              <option value="CASADO(A)" <?php if($row['per_estado_civil']=='CASADO(A)') echo 'selected'; ?>>CASADO(A)</option>
              <option value="VIUDO(A)" <?php if($row['per_estado_civil']=='VIUDO(A)') echo 'selected'; ?>>VIUDO(A)</option>
              <option value="DIVORCIADO(A)" <?php if($row['per_estado_civil']=='DIVORCIADO(A)') echo 'selected'; ?>>DIVORCIADO(A)</option>
              <option value="CONVIVIENTE" <?php if($row['per_estado_civil']=='CONVIVIENTE') echo 'selected'; ?>>CONVIVIENTE</option>
              <option value="OTRO" <?php if($row['per_estado_civil']=='OTRO') echo 'selected'; ?>>OTRO</option>
            </select>
          </div>
          <div class="form-group">
            <label for="per_telefono">Tel&eacute;fono</label>
            <input type="text" class="form-control" id="per_telefono" name="per_telefono" placeholder="Teléfono" value="<?php echo $row['per_telefono']; ?>" >
          </div>
          <div class="form-group">
            <label for="per_celular1">Celular </label>
            <input type="text" class="form-control" id="per_celular1" name="per_celular1" placeholder="Número de celular" value="<?php echo $row['per_celular1']; ?>" >
          </div>
                    <div class="form-group">
            <label for="per_celular2">Otro Número de celular </label>
            <input type="text" class="form-control" id="per_celular2" name="per_celular2" placeholder="Número de celular" value="<?php echo $row['per_celular2']; ?>" >
          </div>
          <div class="form-group">
            <label for="per_correo">Correo</label>
            <input type="text" class="form-control" id="per_correo" name="per_correo" placeholder="Correo" value="<?php echo $row['per_correo']; ?>" >
          </div>
          <div class="form-group">
            <label for="per_correo_institu">Correo Institucional</label>
            <input type="text" class="form-control" id="per_correo_institu" name="per_correo_institu" placeholder="Correo institucional" value="<?php echo $row['per_correo_institu']; ?>" >
          </div>
          <div class="form-group">
            <label for="per_perfil">Enlace facebook</label>
            <input type="text" class="form-control" id="per_perfil" name="per_perfil" placeholder="facebook" value="<?php echo $row['per_perfil']; ?>" >
          </div>
<hr/> 
<h4>DATOS DEL DOMICILIO </h4>
<hr/> 
<div class="form-group">
            <label for="dom_zona">Zona</label>
            <input type="text" class="form-control" id="dom_zona" name="dom_zona" placeholder="Zona" value="<?php echo $row['dom_zona']; ?>" >
          </div>
          <div class="form-group">
            <label for="dom_tipo_via">Tipo de v&iacute;a</label>
            <select class="form-control" id="dom_tipo_via" name="dom_tipo_via">
              <option value="AV" <?php if($row['dom_tipo_via']=='AV') echo 'selected'; ?>>AVENIDA</option>
              <option value="CA" <?php if($row['dom_tipo_via']=='CA') echo 'selected'; ?>>CALLE</option>
              <option value="PL" <?php if($row['dom_tipo_via']=='PL') echo 'selected'; ?>>PLAZA</option>
              <option value="PA" <?php if($row['dom_tipo_via']=='PA') echo 'selected'; ?>>PASAJE</option>
              <option value="CN" <?php if($row['dom_tipo_via']=='CN') echo 'selected'; ?>>CANCHA</option>
              <option value="PR" <?php if($row['dom_tipo_via']=='PR') echo 'selected'; ?>>PARQUE</option>
              <option value="ND" <?php if($row['dom_tipo_via']=='ND') echo 'selected'; ?>>NO DEFINIDO</option>
              <option value="CL" <?php if($row['dom_tipo_via']=='CL') echo 'selected'; ?>>CALLEJON</option>
            </select>
          </div>
          <div class="form-group">
            <label for="dom_via">Nombre de v&iacute;a</label>
            <input type="text" class="form-control" id="dom_via" name="dom_via" placeholder="Nombre de vía" value="<?php echo $row['dom_via']; ?>" >
          </div>
          <div class="form-group">
            <label for="dom_numero">N&uacute;mero</label>
            <input type="text" class="form-control" id="dom_numero" name="dom_numero" placeholder="Número" value="<?php echo $row['dom_numero']; ?>" >
          </div>
          <div class="form-group">
            <label for="dom_edificio">Edificio</label>
            <input type="text" class="form-control" id="dom_edificio" name="dom_edificio" placeholder="Edificio" value="<?php echo $row['dom_edificio']; ?>" >
          </div>
          <div class="form-group">
            <label for="dom_bloque">Bloque</label>
            <input type="text" class="form-control" id="dom_bloque" name="dom_bloque" placeholder="Bloque" value="<?php echo $row['dom_bloque']; ?>" >
          </div>
          <div class="form-group">
            <label for="dom_piso">Piso</label>
            <input type="text" class="form-control" id="dom_piso" name="dom_piso" placeholder="Piso" value="<?php echo $row['dom_piso']; ?>" >
          </div>
          <div class="form-group">
            <label for="dom_departamento">Departamento</label>
            <input type="text" class="form-control" id="dom_departamento" name="dom_departamento" placeholder="Departamento" value="<?php echo $row['dom_departamento']; ?>" >
          </div>
          <hr/> 
<h4>DATOS DEL CONSULTORIO </h4>
<hr/>
          <div class="form-group">
            <label for="dom_zona">Zona</label>
            <input type="text" class="form-control" id="cons_zona" name="cons_zona" placeholder="Zona" value="<?php echo $row['cons_zona']; ?>" >
          </div>
          <div class="form-group">
            <label for="cons_cavenida">Nombre de v&iacute;a</label>
            <input type="text" class="form-control" id="cons_cavenida" name="cons_cavenida" placeholder="Nombre de vía" value="<?php echo $row['cons_cavenida']; ?>" >
          </div>
          <div class="form-group">
            <label for="cons_nro">N&uacute;mero</label>
            <input type="text" class="form-control" id="cons_nro" name="cons_nro" placeholder="Número" value="<?php echo $row['cons_nro']; ?>" >
          </div>
          <div class="form-group">
            <label for="cons_edificio">Edificio</label>
            <input type="text" class="form-control" id="cons_edificio" name="cons_edificio" placeholder="Edificio" value="<?php echo $row['cons_edificio']; ?>" >
          </div>
          <div class="form-group">
            <label for="cons_bloque">Bloque</label>
            <input type="text" class="form-control" id="cons_bloque" name="cons_bloque" placeholder="Bloque" value="<?php echo $row['cons_bloque']; ?>" >
          </div>
          <div class="form-group">
            <label for="cons_piso">Piso</label>
            <input type="text" class="form-control" id="cons_piso" name="cons_piso" placeholder="Piso" value="<?php echo $row['cons_piso']; ?>" >
          </div>
          <div class="form-group">
            <label for="cons_depto">Departamento</label>
            <input type="text" class="form-control" id="cons_depto" name="cons_depto" placeholder="Departamento" value="<?php echo $row['cons_depto']; ?>" >
          </div>
          <div class="form-group">
            <label for="cons_tlf_fijo">Teléfono del consultorio</label>
            <input type="text" class="form-control" id="cons_tlf_fijo" name="cons_tlf_fijo" placeholder="Piso" value="<?php echo $row['cons_tlf_fijo']; ?>" >
          </div>
          <div class="form-group">
            <label for="cons_hr_atencion">Hora de atención</label>
            <input type="text" class="form-control" id="cons_hr_atencion" name="cons_hr_atencion" placeholder="Departamento" value="<?php echo $row['cons_hr_atencion']; ?>" >
          </div>
          <hr/> 
<h4>DATOS DEL TITULO PROFESIONAL </h4>
<hr/>
          <div class="form-group">
            <label for="lic_universidad">Universidad </label>
            <input type="text" class="form-control" id="lic_universidad" name="lic_universidad" placeholder="Titulo emitido en la universidad" value="<?php echo $row['lic_universidad']; ?>" >
          </div>
          <div class="form-group">
            <label for="lic_pais">País</label>
            <input type="text" class="form-control" id="lic_pais" name="lic_pais" placeholder="Pais donde emitieron la licencia" value="<?php echo $row['lic_pais']; ?>" >
          </div>
          <div class="form-group">
            <label for="lic_titular">Nombre completo del titular</label>
            <input type="text" class="form-control" id="lic_titular" name="lic_titular" placeholder="Nombre tal cual está en el título" value="<?php echo $row['lic_titular']; ?>" >
          </div>
          <div class="form-group">
            <label for="lic_fech_emi">Fecha emisión</label>
            <input type="date" class="form-control" id="lic_fech_emi" name="lic_fech_emi" placeholder="Fecha de emisión del título" value="<?php echo $row['lic_fech_emi']; ?>" >
          </div>
          <div class="form-group">
            <label for="lic_cod_titu">Código de título</label>
            <input type="text" class="form-control" id="lic_cod_titu" name="lic_cod_titu" placeholder="Código del título" value="<?php echo $row['lic_cod_titu']; ?>" >
          </div>
          <div class="form-group">
            <label for="lic_folio">Folio</label>
            <input type="text" class="form-control" id="lic_folio" name="lic_folio" placeholder="Número de fólio" value="<?php echo $row['lic_folio']; ?>" >
          </div>
          <div class="form-group">
            <label for="lic_nro_titu">Nro. de título</label>
            <input type="text" class="form-control" id="lic_nro_titu" name="lic_nro_titu" placeholder="Número de título" value="<?php echo $row['lic_nro_titu']; ?>" >
          </div>
          <div class="form-group">
            <label for="lic_serie">Serie</label>
            <input type="text" class="form-control" id="lic_serie" name="lic_serie" placeholder="Número de serie" value="<?php echo $row['lic_serie']; ?>" >
          </div>
          <div class="form-group">
            <label for="lic_fech_titu">Fecha de titulación</label>
            <input type="date" class="form-control" id="lic_fech_titu" name="lic_fech_titu" placeholder="fecha de titulación" value="<?php echo $row['lic_fech_titu']; ?>" >
          </div>
          <hr/> 
<h4>EXPERIENCIA LABORAL</h4>
<hr/>
          <div class="form-group">
            <label for="dpto">Area de desarrollo profesional:</label>
          </div>
          <div class="form-group">
            <label for="exp_are_id">Área</label>
            <select class="form-control" id="exp_are_id" name="exp_are_id">
              <option value="1" <?php if($row['exp_are_id']=='1') echo 'selected'; ?>>SOCIAL</option>
              <option value="2" <?php if($row['exp_are_id']=='2') echo 'selected'; ?>>CLINICA</option>
              <option value="3" <?php if($row['exp_are_id']=='3') echo 'selected'; ?>>EDUCATIVA</option>
              <option value="4" <?php if($row['exp_are_id']=='4') echo 'selected'; ?>>FORENSE O JURIDICA</option>
              <option value="5" <?php if($row['exp_are_id']=='5') echo 'selected'; ?>>CLINICA - EDUCATIVA</option>
              <option value="6" <?php if($row['exp_are_id']=='6') echo 'selected'; ?>>SOCIAL - ORGANIZACIONAL</option>
              <option value="7" <?php if($row['exp_are_id']=='7') echo 'selected'; ?>>SOCIAL - COMUNITARIA</option>
              <option value="8" <?php if($row['exp_are_id']=='8') echo 'selected'; ?>>SOCIAL - EDUCATIVA</option>
              <option value="9" <?php if($row['exp_are_id']=='9') echo 'selected'; ?>>OTRA NO RELACIONADA CON LA PROFESION</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exp_aresp_ids">Área</label>
            <select class="form-control" id="exp_aresp_id" name="exp_aresp_id">
              <option value="2" <?php if($row['exp_aresp_id']=='2') echo 'selected'; ?>>ADICCIONES</option>
              <option value="3" <?php if($row['exp_aresp_id']=='3') echo 'selected'; ?>>AUTOCONOCIMIENTO</option>
              <option value="4" <?php if($row['exp_aresp_id']=='4') echo 'selected'; ?>>CLÍNICA INFANTIL (DOWN, AUTISMO, ETC.)</option>
              <option value="5" <?php if($row['exp_aresp_id']=='5') echo 'selected'; ?>>COGNITIVA</option>
              <option value="6" <?php if($row['exp_aresp_id']=='6') echo 'selected'; ?>>COGNITIVA - COMPORTAMENTAL</option>
              <option value="7" <?php if($row['exp_aresp_id']=='7') echo 'selected'; ?>>COMPORTAMENTAL</option>
              <option value="8" <?php if($row['exp_aresp_id']=='8') echo 'selected'; ?>>COMUNICACIÓN (MARKETING Y DISEÑO)</option>
              <option value="9" <?php if($row['exp_aresp_id']=='9') echo 'selected'; ?>>CRIMINOLOGÍA</option>
              <option value="10" <?php if($row['exp_aresp_id']=='10') echo 'selected'; ?>>DEPORTIVA</option>
              <option value="11" <?php if($row['exp_aresp_id']=='11') echo 'selected'; ?>>DESARROLLO INTEGRAL</option>
              <option value="12" <?php if($row['exp_aresp_id']=='12') echo 'selected'; ?>>DIVERSIDADES SEXUALES</option>
              <option value="13" <?php if($row['exp_aresp_id']=='13') echo 'selected'; ?>>EXISTENCIALISMO</option>
              <option value="14" <?php if($row['exp_aresp_id']=='14') echo 'selected'; ?>>FAMILIA - PAREJA</option>
              <option value="15" <?php if($row['exp_aresp_id']=='15') echo 'selected'; ?>>FEMINISMO</option>
              <option value="16" <?php if($row['exp_aresp_id']=='16') echo 'selected'; ?>>FENOMENOLOGÍA</option>
              <option value="17" <?php if($row['exp_aresp_id']=='17') echo 'selected'; ?>>FORENSE</option>
              <option value="18" <?php if($row['exp_aresp_id']=='18') echo 'selected'; ?>>GÉNERO</option>
              <option value="19" <?php if($row['exp_aresp_id']=='19') echo 'selected'; ?>>GERIATRÍA</option>
              <option value="20" <?php if($row['exp_aresp_id']=='20') echo 'selected'; ?>>GERONTOLOGÍA</option>
              <option value="21" <?php if($row['exp_aresp_id']=='21') echo 'selected'; ?>>GESTALT</option>
              <option value="22" <?php if($row['exp_aresp_id']=='22') echo 'selected'; ?>>GRAFOLOGÍA</option>
              <option value="23" <?php if($row['exp_aresp_id']=='23') echo 'selected'; ?>>HIPNOSIS</option>
              <option value="24" <?php if($row['exp_aresp_id']=='24') echo 'selected'; ?>>HUMANISMO</option>
              <option value="25" <?php if($row['exp_aresp_id']=='25') echo 'selected'; ?>>INFANTO JUVENIL</option>
              <option value="26" <?php if($row['exp_aresp_id']=='26') echo 'selected'; ?>>LEGAL</option>
              <option value="27" <?php if($row['exp_aresp_id']=='27') echo 'selected'; ?>>MÉTODOS DE INVESTIGACIÓN</option>
              <option value="28" <?php if($row['exp_aresp_id']=='28') echo 'selected'; ?>>NEUROPSICOLOGÍA</option>
              <option value="29" <?php if($row['exp_aresp_id']=='29') echo 'selected'; ?>>ONCOLOGÍA</option>
              <option value="30" <?php if($row['exp_aresp_id']=='30') echo 'selected'; ?>>ORGANIZACIONAL</option>
              <option value="31" <?php if($row['exp_aresp_id']=='31') echo 'selected'; ?>>ORIENTACIÓN VOCACIONAL Y PROFESIONAL</option>
              <option value="32" <?php if($row['exp_aresp_id']=='32') echo 'selected'; ?>>PROGRAMACIÓN NEUROLINGÜÍSTICA</option>
              <option value="33" <?php if($row['exp_aresp_id']=='33') echo 'selected'; ?>>PROYECTOS EDUCATIVOS</option>
              <option value="34" <?php if($row['exp_aresp_id']=='34') echo 'selected'; ?>>PROYECTOS SOCIALES</option>
              <option value="35" <?php if($row['exp_aresp_id']=='35') echo 'selected'; ?>>PSICOANÁLISIS</option>
              <option value="36" <?php if($row['exp_aresp_id']=='36') echo 'selected'; ?>>PSICOLINGÜÍSTICA</option>
              <option value="37" <?php if($row['exp_aresp_id']=='37') echo 'selected'; ?>>PSICOSOMÁTICA</option>
              <option value="38" <?php if($row['exp_aresp_id']=='38') echo 'selected'; ?>>PSICOTERAPIA</option>
              <option value="39" <?php if($row['exp_aresp_id']=='39') echo 'selected'; ?>>PSIQUIATRÍA</option>
              <option value="40" <?php if($row['exp_aresp_id']=='40') echo 'selected'; ?>>RECURSOS HUMANOS</option>
              <option value="41" <?php if($row['exp_aresp_id']=='41') echo 'selected'; ?>>RELACIONES PÚBLICAS</option>
              <option value="42" <?php if($row['exp_aresp_id']=='42') echo 'selected'; ?>>SEXUALIDAD</option>
              <option value="43" <?php if($row['exp_aresp_id']=='43') echo 'selected'; ?>>SISTÉMICA</option>
              <option value="44" <?php if($row['exp_aresp_id']=='44') echo 'selected'; ?>>TERAPIA BREVE</option>
              <option value="45" <?php if($row['exp_aresp_id']=='45') echo 'selected'; ?>>TERAPIA FOCAL</option>
              <option value="46" <?php if($row['exp_aresp_id']=='46') echo 'selected'; ?>>TERAPIA INDIVIDUAL</option>
              <option value="47" <?php if($row['exp_aresp_id']=='47') echo 'selected'; ?>>ENFERMEDADES CRONICAS Y TERMINALES</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exp_anios">Años de experiencia</label>
            <input type="text" class="form-control" id="exp_anios" name="exp_anios" placeholder="Expriencia" value="<?php echo $row['exp_anios']; ?>" >
          </div>
          <div class="form-group">
            <label for="exp_detalle">Detalle</label>
            <input type="text" class="form-control" id="exp_detalle" name="exp_detalle" placeholder="Detalle de experiencia" value="<?php echo $row['exp_detalle']; ?>" >
          </div>
          <div class="form-group">
            <label for="exp_descripcion">Descripción</label>
            <textarea rows="4" cols="80"  id="exp_descripcion" name="exp_descripcion" placeholder="DESCRIPCION DEL TRABAJO QUE REALIZA" >
				<?php echo $row['exp_descripcion']; ?>
             </textarea>
          </div>
          <input type="submit" name="Submit" class="btn btn-info" value="GUARDAR">          
          <input type="button" name="nuevo" class="btn btn-info" value="TITULOS" onclick="location.href='modif_titulos.php?id=<?php echo $row['per_colegiado_id']; ?>'"/>
          <input type="button" name="nuevo" class="btn btn-info" value="TRABAJOS" onclick="location.href='trab_modif_trabajos.php?id=<?php echo $row['per_colegiado_id']; ?>'"/>
          <input type="button" name="nuevo" class="btn btn-info" value="REGRESAR" onclick="location.href='../matriculacion/listar.php';"/>
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