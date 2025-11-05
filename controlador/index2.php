<?php
//se declaran variables globales

require_once(__DIR__.'/config.php'); //desde el directorio actual el archivo requerido
require_once(__DIR__.'/router.PHP'); //desde el directorio actual- el archivo requerido

$router = new $router(); // se invoca la clase router
$router->run(); //se ejecuta el metodo run
?>