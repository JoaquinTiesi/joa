<?php
define("SERVER","b9ovwmwcthrjvqamalfl-mysql.services.clever-cloud.com");
define("USUARIO","ujvmkkxz9vqhyrky");
define("PASS","DnGSpIXkhjULk2U1YUz8");
define("BASE","b9ovwmwcthrjvqamalfl");

require('../controlSesion.php'); //Verifica que la sesion este iniciada

$mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);

	$mysqliQuery = "select * from listaestados order by estado ASC";

	if ($respuesta = $mysqli->query($mysqliQuery)) {

			$articulos = [];

			while ($fila = $respuesta->fetch_assoc()) {

				array_push($articulos, $fila['estado']); //Toma los valores posibles para el comboBox desde la base de datos

			}

			$mysqli->close();

			echo json_encode($articulos);

	}
?>
