<?php
	require '../conexion.php';
	
	$id = $_GET['id'];
	//$id = 2;
	$sql = "SELECT per_colegiado_id, per_nombres, per_paterno, per_materno, per_pais_nac, per_ci, per_emision, per_estado_civil, per_telefono, per_celular1, per_celular2, per_correo, per_correo_institu, per_perfil, per_foto, dom_zona, dom_tipo_via, dom_via, dom_numero, dom_edificio, dom_bloque, dom_piso, dom_departamento, exp_are_id, exp_aresp_id, exp_anios, exp_detalle, exp_descripcion, form_tipo_titu, form_desc, form_institu, form_pais, form_fechatitu, lic_universidad, lic_pais, lic_titular, lic_fech_emi, lic_cod_titu, lic_folio, lic_nro_titu, lic_serie, lic_fech_titu, trab_institu, trab_cargo, trab_area, trab_anios, trab_gestion, trab_fechreg FROM psic_datos_personales, psic_domicilio, psic_trabajo, psic_experiencia, psic_formacion, psic_licenciatura WHERE per_colegiado_id='$id' AND dom_colegiado_id='$id' AND exp_colegiado_id='$id' AND form_colegiado_id='$id' AND lic_colegiado_id='$id' AND trab_colegiado_id='$id' LIMIT 1";
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
      <p>Datos completos del registro</p>
      <h2>DETALLE DE CONTACTO</h2>
    </header>
  </div>
</section>
<section id="two" class="wrapper style2">
  <div class="inner">
    <div class="box">
      <div class="content">
        <form method="POST" action="update.php">
          <input type="hidden" id="id" name="id" value="<?php echo $row['per_colegiado_id']; ?>"/>
          <div class="form-group"> <img src="../fotoscolegio/<?php echo $row['per_foto']; ?>" alt="colegiado" style="width:40%"/> </div>
          <div class="form-group">
            <label for="nombres">Nombre</label>
            <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $row['per_nombres'].' '.$row['per_paterno'].' '.$row['per_materno']; ?>" disabled="disabled" />
          </div>
          <div class="form-group">
            <label for="telf1">Tel&eacute;fonos</label>
              <input type="text" id="telf1" name="telf1" placeholder="Teléfono" value="<?php echo $row['per_telefono']; ?>" disabled="disabled" />
              <input type="text" id="cel1" name="cel1" placeholder="Número de celular" value="<?php echo $row['per_celular1']; ?>" disabled="disabled" />
              <input type="text" id="cel2" name="cel2" placeholder="Número de celular" value="<?php echo $row['per_celular2']; ?>" disabled="disabled" />
          </div>
          <div class="form-group">
            <label for="correo">Correo</label>
              <input type="text" id="correo" name="correo" placeholder="Correo" value="<?php echo $row['per_correo']; ?>" disabled="disabled" style="WIDTH: 250px;" />
              <label for="correoinstitu" class="control-label"> &nbsp; Correo Institucional</label>
              <input type="text" id="correoinstitu" name="correoinstitu" placeholder="Correo institucional" value="<?php echo $row['per_correo_institu']; ?>" disabled="disabled" />
            </div>
          <div class="form-group">
            <label for="face">Enlace facebook</label>
              <input type="text" class="form-control" id="face" name="face" placeholder="facebook" value="<?php echo $row['per_perfil']; ?>" disabled="disabled" />
          </div>
          <div class="form-group">
            <label for="area">Área</label>
              <select class="form-control" id="area" name="area" disabled="disabled">
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
            <label for="area">Área</label>
              <select class="form-control" id="area" name="area" disabled="disabled">
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
            <label for="expanios">Años de experiencia</label>
              <input type="text" class="form-control" id="expanios" name="expanios" placeholder="Expriencia" value="<?php echo $row['exp_anios']; ?>" disabled="disabled" />
          </div>
          <div class="form-group">
            <label for="detalle">Detalle</label>
              <input type="text" class="form-control" id="detalle" name="detalle" placeholder="Detalle de experiencia" value="<?php echo $row['exp_detalle']; ?>" disabled="disabled" />
          </div>
          <div class="form-group">
            <label for="desc">Descripción</label>
              <textarea rows="4" cols="50" class="form-control" id="desc" name="desc" disabled="disabled">
              <?php echo $row['exp_descripcion']; ?>
              </textarea>
          </div>
          <div class="form-group">
            <label for="tipotitu">T&iacute;po de t&iacute;tulo</label>
              <select class="form-control" id="tipotitu" name="tipotitu" disabled="disabled">
                <option value="1" <?php if($row['form_tipo_titu']=='1') echo 'selected'; ?>>LICENCIATURA</option>
                <option value="2" <?php if($row['form_tipo_titu']=='2') echo 'selected'; ?>>DIPLOMADO</option>
                <option value="3" <?php if($row['form_tipo_titu']=='3') echo 'selected'; ?>>MAESTRIA</option>
                <option value="4" <?php if($row['form_tipo_titu']=='4') echo 'selected'; ?>>DOCTORADO</option>
                <option value="5" <?php if($row['form_tipo_titu']=='5') echo 'selected'; ?>>POST-DOCTORADO</option>
                <option value="6" <?php if($row['form_tipo_titu']=='6') echo 'selected'; ?>>ESPECIALIDAD</option>
              </select>
          </div>
          <div class="form-group">
            <label for="formdesc">Descripción</label>
            <textarea rows="2" cols="50" class="form-control" id="formdesc" name="formdesc" disabled="disabled">
            <?php echo $row['form_desc']; ?>
            </textarea>
          </div>
          <div class="form-group">
            <label for="forminstitu">Institucióm</label>
              <input type="text" class="form-control" id="forminstitu" name="forminstitu" placeholder="Institución donde realizó el estudio" value="<?php echo $row['form_institu']; ?>" disabled="disabled" />
          </div>
          <div class="form-group">
            <label for="univ">Universidad </label>
              <input type="text" class="form-control" id="univ" name="univ" placeholder="Titulo emitido en la universidad" value="<?php echo $row['lic_universidad']; ?>" disabled="disabled"/>
          </div>
          <div class="form-group">
            <label for="fechemision">Fecha emisión</label>
              <input type="text" class="form-control" id="fechemision" name="fechemision" placeholder="Fecha de emisión del título" value="<?php echo $row['lic_fech_emi']; ?>" disabled="disabled"/>
          </div>
          <div class="form-group">
            <label for="institu">Institución</label>
              <input type="text" class="form-control" id="institu" name="institu" placeholder="Institución donde trabaja" value="<?php echo $row['trab_institu']; ?>" disabled="disabled"/>
          </div>
          <div class="form-group">
            <label for="cargo">Cargo</label>
              <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo que ocupa" value="<?php echo $row['trab_cargo']; ?>" disabled="disabled"/>
          </div>
          <div class="form-group">
            <label for="areatrab">Área de trabajo</label>
              <input type="text" class="form-control" id="areatrab" name="areatrab" placeholder="Área de trabajo" value="<?php echo $row['trab_area']; ?>" disabled="disabled"/>
          </div>
          <div class="form-group">
            <input type="button" name="REGRESAR" class="btn btn-info" value="REGRESAR" onclick="location.href='buscar.php';"/>
          </div>
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