<?php
require '../modelo/conexion1.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/stylesheet.css">
</head>


<body>
  
    <form action="#" name="registro2" method="POST">
    <h2>¡Bienvenido!</h2> <!-- sTítulo de bienvenida -->
    <input class="entrada" type="text" name="name" placeholder="name">
    <input class="entrada" type="email" name="email" placeholder="emal">
    <input class="entrada" type="date" name="date" placeholder="date">
    <input class="entrada" type="text" name="tel" placeholder="tel">
    <input class="entrada"type="text" name="password" placeholder="password">
<div class="boton">
<input class="entrada" type="submit" name="registro">
<input class="entrada" type="reset" value="Borrar">
</div>
<div class="register">
<p > ya tienes cuenta? <a href="login.php" class="login_link">inciar sesion</a> </p>
    </div>
     
     <hr>
</form>


</body>
<?php
if (isset($_POST['registro'])) {  //si se ha enviado el formulario
    $name = $_POST['name'];  //recoge el valor del campo name
    $email = $_POST['email']; //recoge el valor del campo email
    $date = $_POST['date'];  //recoge el valor del campo date
    $tel = $_POST['tel'];  //recoge el valor del campo tel
    $password = $_POST['password']; //recoge el valor del campo password
$insertarDatos = "INSERT INTO lista (name,email,date,tel,password) VALUES ('$name','$email','$date','$tel','$password') ";
$ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);
}
?>
</html>