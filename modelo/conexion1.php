<?php

$sevidor = "localhost"; //servidor local
$usuario = "root"; //usuario de la base de datos
$clave = ""; //contraseña de la base de datos
$baseDeDatos = "registro2"; //nombre de la base de datos
$enlace = mysqli_connect($sevidor, $usuario, $clave, $baseDeDatos);

$conn=$enlace;

define("KEY","develoteca");
define("COD","AES-128-ECB");



?>


