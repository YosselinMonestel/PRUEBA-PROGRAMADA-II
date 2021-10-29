<?php
 	//method of deleting the Owner table
	include "segmentos/conexion.inc";
	$auxSql = sprintf("delete from Owner where Id = %s", $_GET['Id']);
	$Regis = mysqli_query($conex, $auxSql ) or 
		die(mysql_error());
	 header("Location:owner.php"); 
?>