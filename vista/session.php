<?php 
// lo que hace este programa es iniciar una sesion, 
// crear una seseion, inyectar datos y despues muestra los datos
//al finalizar se destruye la sesio
session_start(); // Iniciar la sesión


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<div>




<?php
/*
$array = array('juan','35','paris','','');
$_SESSION ['datos'] = $array;
echo $_SESSION ['datos'][0]; // muestra juan
echo "<pre>"; // formato de impresion
var_dump($_SESSION); // muestra todo el array de sesion
echo "</pre>"; // formato de impresion para que se vea mejor
*/

//ahora se creara un array asociativo en sesion e introducir estos datos en la sesion
/*
$array = array('nombre' => 'juan', 'edad' => '35', 'ciudad' =>'paris');
$_SESSION ['datos'] = $array; // se inyectan todos los datos del array en la sesion datos
echo '<pre>'; // formato de impresion
var_dump ($_SESSION ['datos']); // muestra todo el array de sesion
echo '<pre>'; // formato de impresion
*/
echo $_SESSION ['datos']['nombre']; // muestra juan


//se pueden almacenar datos en una sola sesion
/*
$_SESSION['nombre'] = "Juan Perez"; // Crear una variable de sesión (nombre) y asignarle un valor
$_SESSION['edad'] = 22; // Crear una variable de sesión (nombre) y asignarle un valor
$_SESSION['pais'] = "Mexico"; // Crear una variable de sesión (nombre) y asignarle un valor


echo $_SESSION['nombre']; // Muestra "Juan Perez"
echo "<br>";
echo $_SESSION ['edad']; // Muestra "22"
*/

//session_unset(); // Elimina todas las variables de sesión
session_destroy(); // Destruir la sesión

//si sesion contiene datos 
if(isset($_SESSION['datos'])) { // verifica si la sesion aun contiene datos
    
    session_start();
    
    echo "La sesión aún contiene datos.";


} else {
    header("Location: login.php"); // redirige a autenticar.php
    echo "La sesión ha sido destruida y no contiene datos.";
}

?>
</div>