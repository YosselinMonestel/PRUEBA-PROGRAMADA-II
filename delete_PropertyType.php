<?php
	// method of deleting the PropertyType table
	include "segmentos/conexion.inc";
	$auxSql = sprintf("delete from PropertyType where Id = %s", $_GET['Id']);
	$Regis = mysqli_query($conex, $auxSql ) or 
		die(mysql_error());
	header("Location:propertyType.php"); 
?>
