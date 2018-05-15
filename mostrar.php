<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
    <?php  
    //tomamos los datos del archivo conexion.php  
    include("conexion.php");  
    $link = Conectarse();  
    //se envia la consulta 
	$RefCAllSp = $Conexion->prepare("CALL SP_DAMENOMBREUSUARIO(?)"); 
    $result = mysql_query("SELECT per_nombres, per_paterno, per_materno, 
								  per_nacimiento, per_pais_nac, per_ci, 
								  per_emision, per_telefono, per_estado_civil, 
								  per_celular1, per_correo, per_perfil 
								  FROM psic_datos_personales WHERE per_colegiado_id = 3", $link);  
    //se despliega el resultado  
    echo "<table>";  
    echo "<tr>";  
    echo "<th>Nombres</th>";  
    echo "<th>Primer Apellido</th>";  
    echo "<th>Segundo Apellido</th>"; 
	echo "<th>Fecha de Nacimiento</th>";  
    echo "<th>País</th>";  
    echo "<th>Carnet de Identidad</th>"; 
    echo "<th>Emisión</th>";  
    echo "<th>Teléfono</th>";  
    echo "<th>Estado civil</th>"; 
    echo "<th>Celular</th>";  
    echo "<th>Correo</th>";  
    echo "<th>Facebook</th>";  
    echo "</tr>";  
    while ($row = mysql_fetch_row($result)){   
        echo "<tr>";  
        echo "<td>".$row[0]."</td>";  
        echo "<td>".$row[1]."</td>";  
        echo "<td>".$row[2]."</td>"; 
		echo "<td>".$row[3]."</td>";  
        echo "<td>".$row[4]."</td>";  
        echo "<td>".$row[5]."</td>"; 
		echo "<td>".$row[6]."</td>";  
        echo "<td>".$row[7]."</td>";  
        echo "<td>".$row[8]."</td>"; 
		echo "<td>".$row[9]."</td>";  
        echo "<td>".$row[10]."</td>";  
        echo "<td>".$row[11]."</td>"; 
        echo "</tr>";  
    }  
    echo "</table>";  
    ?>  
</body>
</html>