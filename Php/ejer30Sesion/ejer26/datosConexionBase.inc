<?php
define("SERVER","b9ovwmwcthrjvqamalfl-mysql.services.clever-cloud.com");
define("USUARIO","ujvmkkxz9vqhyrky");
define("PASS","DnGSpIXkhjULk2U1YUz8");
define("BASE","b9ovwmwcthrjvqamalfl");

require('../controlSesion.php'); //Verifica que la sesion este iniciada

//define("SERVER","localhost");
//define("USUARIO","root");
//define("PASS","");
//define("BASE","usuarios");

$mysqli = new mysqli(SERVER,USUARIO,PASS,BASE); //Conexiones manuales en casi todos los archivos. De otra forma NO FUNCIONA
 ?>
