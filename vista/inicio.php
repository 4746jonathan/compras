<?php

session_start(); // Inicia o reanuda la sesión
var_dump($_SESSION); 
// Si NO existe la variable de sesión 'name', lo redirige al login
if (isset($_SESSION["name"])) { // Verifica si la sesión 'name' no está establecida
}

else{
     header("Location: login.php"); // Redirige a la página de inicio de sesión
    exit(); // Muy importante para detener la ejecución del script
}

// Si la sesión existe, puedes guardar el nombre en una variable para usarlo
$nombre = $_SESSION["name"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema de gestion de biblioteca</title>
    <link rel="stylesheet" href="../estilos/styleInicio.css">
</head>
<body>

    <div class="container">
    <div clas="card">

    <div>

    <header>
<form action="../controlador/cerrar.php" method="POST">
<button type="submit">cerrar sesion</button>
</form>


    </header>

</div>

    
    </div>
    
    </div>
    </div>
</body>
</html>

