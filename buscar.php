<!DOCTYPE HTML>
<html>
<head>
<title>Colegio de Psicologos de La Paz</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="../assets/css/main.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<style type="text/css">
#two .inner .box .content .form-group .row.table-responsive .table.table-striped tbody tr td {
	font-family: MS Serif, New York, serif;
}
</style>
</head>
<body>

<!-- Header -->
<header id="header" class="alt">
  <div class="logo"><img  class="centrado" src="../images/logo.png" width="45" height="45" alt="COLEGIO DE PSICOLOGOS DE LA PAZ" /></div>
  <a href="#menu">MENÚ</a> </header>
<!-- Nav -->
<nav id="menu">
  <ul class="links">
    <li><a href="index.html">Inicio</a></li>
    <li><a href="registroCompleto/registroColegiados.php">Matriculación</a></li>
    <li><a href="paginas/institucion.html">El colegio</a></li>
    <li><a href="galeriaeventos/index.php">Publicaciones</a></li>
    <li><a href="buscar.php">Consultas</a></li>
    <li><a href="contacto/contacto.html">Contactos</a></li>
    <li><a href="login/login.html">Administración</a></li>
  </ul>
</nav>

<!-- One -->
<section id="One" class="wrapper style3">
  <div class="inner">
    <header class="align-center">
      <p>Para recurrir a un especialista </p>
      <h2>CONSULTA</h2>
    </header>
  </div>
</section>
<?php
	require '../conexion.php';
	
	$valor1 = "";
	$valor2 = "";

	if(!empty($_POST))
	{
		$valor1 = $_POST['area1'];
		$valor2 = $_POST['area2'];
	}
	//$sql = "SELECT * FROM personas $where";
	  $sql= " SELECT exp_colegiado_id, per_nombres, per_paterno, per_materno, are_descripcion, aresp_descripcion, exp_detalle, exp_descripcion, cons_zona, cons_cavenida, cons_nro, per_celular1, per_correo, per_perfil FROM psic_experiencia, psic_area, psic_areaespecifica, psic_consultorio, psic_datos_personales WHERE are_id = exp_are_id AND aresp_id = exp_aresp_id AND cons_colegiado_id = exp_colegiado_id AND per_colegiado_id = exp_colegiado_id ";
  
	  if($valor1 != "TODAS") { // Si ninguno esta vacío 
		$sql .= "AND are_descripcion LIKE '%$valor1%'"; 
	  } 
	  if($valor2 != "TODAS") {
		$sql .= " AND aresp_descripcion LIKE '%$valor2%' ";
	  } 
	  //var_dump($sql);
	$resultado = $mysqli->query($sql);
	
?>
<section id="two" class="wrapper style2">
  <div class="inner">
    <div class="box">
      <div class="content">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="form-group">
            <label for="area1">&Aacute;rea</label>
            <select class="form-control" id="area1" name="area1">
              <option value="TODAS">TODAS</option>
              <option value="CLINICA">CLINICA</option>
              <option value="EDUCATIVA">EDUCATIVA</option>
              <option value="FORENSE O JURIDICA">FORENSE O JURIDICA</option>
              <option value="CLINICA - EDUCATIVA">CLINICA - EDUCATIVA</option>
              <option value="SOCIAL - ORGANIZACIONAL">SOCIAL - ORGANIZACIONAL</option>
              <option value="SOCIAL - COMUNITARIA">SOCIAL - COMUNITARIA</option>
              <option value="SOCIAL - EDUCATIVA">SOCIAL - EDUCATIVA</option>
              <option value="OTRA NO RELACIONADA CON LA PROFESION">OTRA NO RELACIONADA CON LA PROFESION</option>
            </select>
          </div>
          <div class="form-group">
            <label for="area1">&Aacute;rea específica:</label>
            <select class="form-control" id="area2" name="area2">
              <option value="TODAS">TODAS</option>
              <option value="ADICCIONES">ADICCIONES</option>
              <option value="AUTOCONOCIMIENTO">AUTOCONOCIMIENTO</option>
              <option value="CLÍNICA INFANTIL (DOWN, AUTISMO, ETC.)">CLÍNICA INFANTIL (DOWN, AUTISMO, ETC.)</option>
              <option value="COGNITIVA">COGNITIVA</option>
              <option value="COGNITIVA - COMPORTAMENTAL">COGNITIVA - COMPORTAMENTAL</option>
              <option value="OMPORTAMENTAL">COMPORTAMENTAL</option>
              <option value="COMUNICACIÓN (MARKETING Y DISEÑO)">COMUNICACIÓN (MARKETING Y DISEÑO)</option>
              <option value="RIMINOLOGÍA">CRIMINOLOGÍA</option>
              <option value="DEPORTIVA">DEPORTIVA</option>
              <option value="DESARROLLO INTEGRAL">DESARROLLO INTEGRAL</option>
              <option value="DIVERSIDADES SEXUALES">DIVERSIDADES SEXUALES</option>
              <option value="EXISTENCIALISMO">EXISTENCIALISMO</option>
              <option value="FAMILIA - PAREJA">FAMILIA - PAREJA</option>
              <option value="FEMINISMO">FEMINISMO</option>
              <option value="FENOMENOLOGÍA">FENOMENOLOGÍA</option>
              <option value="FORENSE">FORENSE</option>
              <option value="GENERO">GÉNERO</option>
              <option value="GERIATRIA">GERIATRÍA</option>
              <option value="GERONTOLOGIA">GERONTOLOGÍA</option>
              <option value="GESTALT">GESTALT</option>
              <option value="GRAFOLOGÍA">GRAFOLOGÍA</option>
              <option value="HIPNOSIS">HIPNOSIS</option>
              <option value="HUMANISMO">HUMANISMO</option>
              <option value="INFANTO JUVENIL">INFANTO JUVENIL</option>
              <option value="LEGAL">LEGAL</option>
              <option value="MÉTODOS DE INVESTIGACIÓN">MÉTODOS DE INVESTIGACIÓN</option>
              <option value="NEUROPSICOLOGÍA">NEUROPSICOLOGÍA</option>
              <option value="ONCOLOGÍA">ONCOLOGÍA</option>
              <option value="ORGANIZACIONAL">ORGANIZACIONAL</option>
              <option value="ORIENTACIÓN VOCACIONAL Y PROFESIONAL">ORIENTACIÓN VOCACIONAL Y PROFESIONAL</option>
              <option value="PROGRAMACIÓN NEUROLINGÜÍSTICA">PROGRAMACIÓN NEUROLINGÜÍSTICA</option>
              <option value="PROYECTOS EDUCATIVOS">PROYECTOS EDUCATIVOS</option>
              <option value="PROYECTOS SOCIALES">PROYECTOS SOCIALES</option>
              <option value="PSICOANÁLISIS">PSICOANÁLISIS</option>
              <option value="PSICOLINGÜÍSTICA">PSICOLINGÜÍSTICA</option>
              <option value="PSICOSOMÁTICA">PSICOSOMÁTICA</option>
              <option value="PSICOTERAPIA">PSICOTERAPIA</option>
              <option value="PSIQUIATRÍA">PSIQUIATRÍA</option>
              <option value="RECURSOS HUMANOS">RECURSOS HUMANOS</option>
              <option value="RELACIONES PÚBLICAS">RELACIONES PÚBLICAS</option>
              <option value="SEXUALIDAD">SEXUALIDAD</option>
              <option value="SISTÉMICA">SISTÉMICA</option>
              <option value="TERAPIA BREVE">TERAPIA BREVE</option>
              <option value="TERAPIA FOCAL">TERAPIA FOCAL</option>
              <option value="TERAPIA INDIVIDUAL">TERAPIA INDIVIDUAL</option>
              <option value="ENFERMEDADES CRONICAS Y TERMINALES">ENFERMEDADES CRONICAS Y TERMINALES</option>
            </select>
          </div>
          <input type="submit" id="enviar" name="enviar" value="BUSCAR" class="btn btn-info" />
        </form>
        <br>
        <div class="form-group">
          <div class="row table-responsive">
            <table class="table table-striped">
              <thead>
                <tr class="info">
                  <th><div align="center">
                      <h5><span class="clearfix">NÚMERO</span></h5>
                    </div></th>
                  <th><div align="center">
                      <h5><span class="clearfix">NOMBRES</span></h5>
                    </div></th>
                  <th><div align="center">
                      <h5><span class="clearfix">1ER. APELLIDO</span></h5>
                    </div></th>
                  <th><div align="center">
                      <h5><span class="clearfix">2DO. APELLIDO</span></h5>
                    </div></th>
                  <th><div align="center">
                      <h5><span class="clearfix">CELULAR</span></h5>
                    </div></th>
                  <th><div align="center">
                      <h5><span class="clearfix">MÁS DETALLES</span></h5>
                    </div></th>
                </tr>
              </thead>
              <tbody>
                <?php $cont=0; while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { $cont++;?>
                <tr>
                  <td><h6><span class="clearfix"><?php echo $cont; ?></span></h6></td>
                  <td><h6><span class="clearfix"><?php echo $row['per_nombres']; ?></span></h6></td>
                  <td><h6><span class="clearfix"><?php echo $row['per_paterno']; ?></span></h6></td>
                  <td><h6><span class="clearfix"><?php echo $row['per_materno']; ?></span></h6></td>
                  <td><h6><span class="clearfix"><?php echo $row['per_celular1']; ?></span></h6></td>
                  <td><h6><a href="ver.php?id=<?php echo $row['exp_colegiado_id']; ?>"><span class="glyphicon glyphicon-user"> DETALLES</span></a></h6></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Modal -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
      </div>
      <div class="modal-body"> ¿Desea eliminar este registro? </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a class="btn btn-danger btn-ok">Delete</a> </div>
    </div>
  </div>
</div>
<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script> 

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