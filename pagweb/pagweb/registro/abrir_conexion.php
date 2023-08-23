<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "registrocliente";    // sera el valor de nuestra BD 
	$usuariodb = "sem_lopez";    // sera el valor de nuestra BD 
	$clavedb = "12345";    // sera el valor de nuestra BD 

	//Lista de Tablas
	$tabla_db1 = "registro"; 	   // tabla de usuarios
	

	error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    echo "Los datos se insertaron correctamente";
	    exit();
	}

?>