<?php


session_start(); // Iniciar la sesión
session_unset(); // Elimina todas las variables de sesión
session_destroy(); // Destruir la sesión

header("Location: ../vista/login.php"); // Redirigir a la página de inicio de sesión
exit();



?>