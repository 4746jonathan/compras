<!DOCTYPE html>
<!-- Declara el tipo de documento HTML5 -->
<html lang="en">
<head>
    <!-- Define la codificación de caracteres (UTF-8) -->
    <meta charset="UTF-8">
    <!-- Hace la página responsive en dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título que aparece en la pestaña del navegador -->
    <title>Document</title>
    <!-- Enlace al CSS de Bootstrap (CDN) para estilos y componentes -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <!-- Script de Popper.js (requerido por algunos componentes de Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!-- Script de JavaScript de Bootstrap (CDN) para comportamientos dinámicos -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Barra de navegación fija en la parte superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"> 
        <!-- Marca o logo de la empresa (texto) -->
        <a class="navbar-brand">logo de la empresa</a>
        <!-- Botón que aparece en pantallas pequeñas para expandir/contraer el nav -->
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <!-- Icono del botón toggler (Bootstrap añade estilos) -->
            <span class="navbar-toggler-icon"></span>
        </button>
       
        <!-- Contenedor colapsable del menú con id "my-nav" -->
        <div id="my-nav" class="collapse navbar-collapse">
            <!-- Lista de elementos de navegación -->
            <ul class="navbar-nav mr-auto">
                <!-- Elemento de navegación activo -->
                <li class="nav-item active">
                    <!-- Enlace del item 1; el span sr-only indica "actual" para lectores de pantalla -->
                    <a class="nav-link" href="#">Item 1 <span class="sr-only">(current)</span></a>
                </li>
                <!-- Otro elemento de navegación (aquí marcado como deshabilitado) -->
                <li class="nav-item active">
                    <!-- Enlace a index.php; tabindex -1 y aria-disabled indican que está deshabilitado -->
                    <a class="nav-link disabled" href="../controlador/index.php" tabindex="-1" aria-disabled="true">Home</a>
                </li>
                <!-- Item del carrito (también deshabilitado en este ejemplo) -->
                <li class="nav-item active">
                    <a class="nav-link" href="mostrarCarrito.php">carrito(0)</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Espacio extra para que el contenido no quede oculto bajo la navbar fija -->
    <br/>
    <br/>

    <!-- Contenedor principal de Bootstrap -->
    <div class="container"></div>