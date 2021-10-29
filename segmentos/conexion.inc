<?php
    //parametros de conexion (opcionales)
	$servidor  = "localhost";
    $basedatos = "Quercu";
    $usuario   = "root";
    $contra    = "";
	
    //suprime advertencias
    error_reporting(0);

	//proceso para conectar con el servidor 
    if(!$conex = mysqli_connect($servidor, $usuario, $contra, $basedatos)){
        echo "<h3><font color='red'>Error: No se puede conectar al servidor de MySQL.</font></h3>" . "<hr>";
        echo "<strong>NÃºmero........:</strong> " . mysqli_connect_errno() . "<br>";
        echo "<strong>DescripciÃ³n...:</strong> " . mysqli_connect_error() . "<br>";
        exit;          
    }    
?>