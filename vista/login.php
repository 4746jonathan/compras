<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/StyleLogin.css">
</head>
<body>

  <div class="container">
    <h2>¡Bienvenido!</h2> <!-- sTítulo de bienvenida -->
<hr>
    <form action="../controlador/autenticar.php" method="post" autocomplete="off"> <!-- Formulario de inicio de sesión -->
       
      <input type="email" name="email" placeholder="email">
      
     <input type="password" name="password" placeholder="password">
<div class="boton">
      <input class=boton type="submit" value="INGRESAR"> <!-- Botón para enviar el formulario -->
    </div>

    <p class="registro"> ¿No tienes una cuenta?    <a href="register.php" class="register">Registrar</a> </p>
    
     
     <hr>
    </form>

  </div>    



</body>
</html>