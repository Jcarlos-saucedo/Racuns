<?php
	// Parametros a configurar para la conexion de la base de datos
	$host = "127.0.0.1";    // sera el valor de nuestra BD
	$basededatos = "hstw_banco";    // sera el valor de nuestra BD
	$usuariodb = "root";    // sera el valor de nuestra BD
	$clavedb = "";    // sera el valor de nuestra BD

	//Lista de Tablas
	$tabla_db1 = "credito"; 	   // tabla de usuarios
	$tabla_db2 = "debito";
	$tabla_db3 = "users";

	//error_reporting(0); //No me muestra errores

	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>
