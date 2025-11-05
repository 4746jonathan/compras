
<?php
// se declaran variables 
// hay ocaciones en las que el nombre del proyecto cambia, entonces utilizamos lo que tenemos en la primera viable 
// pero necesitamos extraer la p´rimera parte de esta direccion /tienda/router_php/index.php
//eso lo podemos extarer con una funcion llamada dirname
$folderPath = dirname($_SERVER['SCRIPT_NAME']); // en las variables se integran los parametros obtenidos en las direcciones solicitadas 
//

$urlPath = $_SERVER['REQUEST_URI']; 
$url = substr($urlPath,strlen($folderPath)); //substr extrae una cadena de texto dentro de una cadena de texto 
//la longitud de la cadena de texto que se encuentra en la primera variable
//primer parametro url path 

define('URL',$url); // se declara una constante global llamada url y dentro de esa variable se almacena url 
//se imprime cada una de las variables para ver que es lo que contienen
echo $folderPath. '<br>';
echo $urlPath . '<br>';
echo $url . '<br>';
 



/*
echo '<pre>'; // se encierra en una etiqueta
var_dump($_SERVER); //se imrpime una variable global
echo '</pre>';
*/

