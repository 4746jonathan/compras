<?php

// Incluye la conexión a la base de datos (normalmente crea $pdo u otra variable de conexión)
include '../modelo/conexion1.php';
include '../controlador/carrito.php';
include 'cabecera.php';
?>
<?php if($mensaje!=""){ ?>
        <br>
        <!-- Alerta de éxito (puede usarse para mensajes tipo "producto agregado") -->
        <div class="alert alert-success">
            <?php echo $mensaje;?>
            <!-- Enlace dentro de la alerta con apariencia de badge para ver carrito -->
            <a href="mostrarCarrito.php" class="badge badge-success"> ver carrito</a>
        </div>
    <?php }?>
        <!-- Fila donde se mostrarán los productos en tarjetas (cards) -->
        <div class="row">
            <?php
            // PREPARAR Y EJECUTAR CONSULTA A LA BASE DE DATOS
            // $pdo viene (probablemente) del archivo 'global/conexion.php'
            // Prepara una consulta SQL que selecciona todos los registros de la tabla tblproductos
$sql = "SELECT * FROM tblproductos2";
$result = $conn->query($sql);

$listaProductos = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $listaProductos[] = $row;
    }
}
foreach ($listaProductos as $producto) {
            ?>

            

 <div class="col-3">
        <!-- Tarjeta (card) que contiene la imagen y detalles del producto -->
        <div class="card">
            <img 
            title="<?php echo $producto['Nombre'];?>"            
            alt="<?php echo $producto['Nombre'];?>"                     
            class="card-img-top"               
            src="<?php echo $producto['Imagen'];?>"            
            height="317px"
            >                    

            <div class="card-body">
                <!-- Etiqueta con el título del producto -->
                <span>Titulo del producto</span>
                <!-- Precio del producto dentro de un h5 -->
                <h5 class="card-title">$300.00</h5>
                <!-- Descripción corta del producto -->
                <p class="card-text">description</p>

                <form action="" method="post"> <!-- se crea un formulario
                    este formulario me va a servir para que envie la informacion del libro digital 
                    que el usuario esta seleccionando -->
                 <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt( $producto['id'],COD,KEY);?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
                 <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">
                    
                 <button class="btn btn-primary" 
                    name="btnAccion" 
                      value="Agregar" 
                        type="submit">agregar al carrito</button>



                </form>

                <!-- Botón para agregar al carrito. En este código es tipo="button" (no envía formulario). -->
               
            </div>
        </div>
    </div>
           <?php }?>

                <!-- Columna para un producto (diseño responsive con distintos tamaños de columna según pantalla) -->
   
               
              
            
   
   
</div> <!-- Fin de row -->
    </div> <!-- Fin de container -->


</body>
</html>

<?php
include 'pie.php';



?>



<!--
<div class="card shadow-lg border-0"> //sombra y sin borde 
.card:hover {
  transform: scale(1.05);
  transition: 0.3s;
}
-->



