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
      <p>Para editar o agregar una mención </p>
      <h2>FORMACION</h2>
    </header>
  </div>
</section>
<?php
	require '../conexion.php';	
	$id = $_GET['id'];

	  $sql= "SELECT psic_formacion.form_id, psic_formacion.form_colegiado_id, psic_formacion.form_tipo_titu, psic_formacion.form_desc, psic_formacion.form_institu, 
psic_formacion.form_pais, psic_formacion.form_fechatitu, psic_formacion.form_estado, psic_tipo_titulo.titulo_descripcion 
FROM psic_formacion, psic_tipo_titulo  
WHERE form_colegiado_id='$id' AND psic_tipo_titulo.titulo_id=psic_formacion.form_tipo_titu";
//var_dump($sql);
	$resultado = $mysqli->query($sql);
	
?>
<section id="two" class="wrapper style2">
  <div class="inner">
    <div class="box">
      <div class="content">
        <br>
        <div class="form-group">
          <div class="row table-responsive">
            <table class="table table-striped">
              <thead>
                <tr class="info">
                  <th><div align="center">
                      <h5><span class="clearfix">NUMERO</span></h5>
                    </div></th>
                  <th><div align="center">
                      <h5><span class="clearfix">INSTITUCION</span></h5>
                    </div></th>
                  <th><div align="center">
                      <h5><span class="clearfix">TIPO DE TITULO</span></h5>
                    </div></th>
                  <th><div align="center">
                      <h5><span class="clearfix">ESTUDIO</span></h5>
                    </div></th>
                  <th><div align="center">
                      <h5><span class="clearfix">EDITAR</span></h5>
                    </div></th>
                </tr>
              </thead>
              <tbody>
                <?php $cont=0; while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { $cont++; $colegiado= $row['form_colegiado_id'];?>
                <tr>
                  <td><h6><span class="clearfix"><?php echo $cont; ?></span></h6></td>
                  <td><h6><span class="clearfix"><?php echo $row['form_institu']; ?></span></h6></td>
                  <td><h6><span class="clearfix"><?php echo $row['titulo_descripcion']; ?></span></h6></td>
                  <td><h6><span class="clearfix"><?php echo $row['form_desc']; ?></span></h6></td>
                  <td><h6><a href="modif_editar.php?id=<?php echo $row['form_id']; ?>"><span class="glyphicon glyphicon-pencil"> EDITAR</span></a></h6></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
          <div class="form-group">
            <input type="button" name="nuevo" class="btn btn-info" value="AGREGAR" onclick="location.href='modif_agregar.php?id=<?php echo $colegiado; ?>'"/>
            <input type="button" name="nuevo" class="btn btn-info" value="REGRESAR" onclick="location.href='modificar.php?id=<?php echo $colegiado; ?>'"/>
            <input type="button" name="nuevo" class="btn btn-info" value="CANCELAR" onclick="location.href='../index.html'"/>
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