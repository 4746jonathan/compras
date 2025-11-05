<?php

// Incluye la conexión a la base de datos (normalmente crea $pdo u otra variable de conexión)
include '../modelo/conexion1.php';
include '../controlador/carrito.php';
include 'cabecera.php';
include 'pie.php';
?>

<br>
<h3>Lista del carrito </h3>
<?php
if(!empty($_SESSION['CARRITO'])){

}
?>
<table class="table table-light table-bordered">
<tbody>
    <tr>
    <td width = "40%">Descripcion</td>
    <td width = "15%" class="text-center">Cantidad</td>
    <td width = "20%" class="text-center">Precio</td>
    <td width = "20%" class="text-center">Total</td>
    <td width = "5%">--</td>
    </tr>
    <?php $total=0; ?>
    <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
    <tr>
    <td width = "40%"><?php echo $producto['NOMBRE']?></td>
    <td width = "15%" class="text-center"><?php echo $producto['CANTIDAD']?></td>    
    <td width = "20%" class="text-center"><?php echo $producto['PRECIO']?></td>
    <td width = "20%" class="text-center"><?php echo number_format ($producto['PRECIO']*$producto['CANTIDAD'],2);?></td>
    <td width = "5%">

    <form action="" method="post">
        
    <input type="hidden" 
        name="id"
        id="id" 
        value="<?php echo openssl_encrypt($producto['ID'],COD,KEY)?>">
       
        <button class="btn btn-danger" 
        type="submit"
        name="btnAccion"
        value="Eliminar"
        >Eliminar</button>
    
    
    
    </td>    

    </form>
    
    </tr>
    <?php $total = $total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
    <?php }?>
    <tr>
        <td colspan="3" aling="rigt"><h3>Total</h3></td>
        <td alig="rigt"><h3>$<?php echo number_format($total,2);?></h3></td>
        <td></td>
    </tr>

<tr>
    <td colspan="5">
        <form action="../controlador/pagar.php" method="post">
            <div class="alert alert-success">
            <div class="form-group">
            <label for="my-input">Correo de contacto</label>
            <input id="email" name="email"
            class="form-control" 
            type="email" 
            placeholder="por favor escribe tu correo"
            required>
            </div>
        <small id="emailHelp"
        class="form-text text-muted">
    los productos se enviaran a este correo.
    </small>
        </div>
        <button
        class="btn btn-primary btn-lg btn-block"
        type="submit"
        name="btnAccion"
        value = "proceder">
        proceder a pagar>>
        </button>
       
        </form>
        
    </td>
</tr>


</tbody>


</table>