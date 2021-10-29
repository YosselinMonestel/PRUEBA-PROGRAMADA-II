<?php
	// delete method from Property table
	include "segmentos/conexion.inc";
	$auxSql = sprintf("delete from Property where Id = %s", $_GET['Id']);
	$Regis = mysqli_query($conex, $auxSql ) or 
		die(mysql_error());
	 header("Location:property.php"); 
?>
