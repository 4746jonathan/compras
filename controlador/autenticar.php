
<?php
if (!empty($_POST['email']) && !empty($_POST['password'])) { // Verificar que los campos no estén vacíos
    // el empty lo que hace es verificar si una variable está vacía o no.
    session_start(); // Iniciar la sesión
require '../modelo/conexion1.php'; // Incluir el archivo de conexión a la base de datos

    $email = $_POST['email']; // Obtener el correo electrónico del formulario
$password = $_POST['password']; // Obtener la contraseña del formulario

    // Consulta para verificar las credenciales del usuario
  $query = "SELECT name FROM lista WHERE email = '$email' AND password = '$password'"; // Ajusta el nombre de la tabla y los campos según tu base de datos
    // select lo que hace es seleccionar datos de una base de datos
 $result = mysqli_query($enlace, $query); // Ejecutar la consulta
    // mysqli_query lo que hace es ejecutar una consulta en la base de datos

    if (mysqli_num_rows($result) == 1) { //lo que hace es verificar si hay una fila que coincida con las credenciales
        // Credenciales válidas
        $row = mysqli_fetch_assoc($result); // Obtener los datos del usuario
$nombreUsuario = $row['name']; // Obtener el nombre del usuario

        // Guardar el nombre del usuario en la sesión
        $_SESSION['name'] = $nombreUsuario; // Cambiado a 'nombreUsuario' para mayor claridad

        // Redirigir al usuario a la página de inicio
    header("Location: ../vista/compras.php?user=$_SESSION"); 
        exit(); // Asegurarse de que el script se detenga después de la redirección

        
  } else {
        // Credenciales inválidas
        echo "Correo electrónico o contraseña incorrectos."; // Mensaje de error
    }
} else {
    echo "Por favor, complete todos los campos.";// Verificar que los campos no estén vacíos
}

?>