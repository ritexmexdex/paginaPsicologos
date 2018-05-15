<?php
	//mysql_set_charset('utf8');
	$mysqli = new mysqli('localhost', 'root', '', 'colpsiclapaz');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}

?>