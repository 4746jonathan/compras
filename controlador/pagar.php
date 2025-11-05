<?php

// Incluye la conexión a la base de datos (normalmente crea $pdo u otra variable de conexión)
include '../modelo/conexion1.php';
include 'carrito.php';
include '../vista/cabecera.php';
include '../vista/pie.php';

?>

<?php  
if ($_POST) {
    $total = 0;
    $SID = session_id();
    

    foreach ($_SESSION['CARRITO'] as $indice => $producto) {
        $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']);
    }

    $sql = "INSERT INTO `tblventas`
    (`ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`)
    VALUES (?, ?, NOW(), ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $clave = $SID;
    $paypal = '';
    $Correo = $_POST['email'];
    $totalVenta = $total;
    $estado = 'pendiente';

    $stmt->bind_param("sssds", $clave, $paypal, $Correo, $totalVenta, $estado);

    if ($stmt->execute()) {
        $idVenta = $conn->insert_id;
        foreach ($_SESSION['CARRITO'] as $indice => $producto) {
        $sqlDetalle = "INSERT INTO `tbldetalleventa` (`IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) 
        VALUES (?,?,?,?,'0')";

                 $stmtDetalle = $conn->prepare($sqlDetalle);
                 $idVenta ='IDVENTA';
                 $producto= 'IDPRODUCTO';
                 $precio= 'PRECIOUNITARIO';
                 $cantidad= 'CANTIDAD';

               $stmtDetalle->bind_param("iidi", $idVenta, $producto, $precio, $cantidad);
   

        }
       
    } else {
        echo "Error al registrar la venta: " . $stmt -> error;
    }

    $stmt->close();
    $conn->close();
     

}?>
<script src="https://www.paypal.com/sdk/js?client-id=AeISBehOEG-IktyvlCt519hnModw3fsdH3-H2laD7yswmXZG4lssPAV5W8Jr_4lK5fzqM7YPmi_OR-_I&currency=MXN"></script>


<style>
#paypal-button-container {
  margin-top: 20px;
}
@media screen and (max-width: 400px) {
  #paypal-button-container {
    width: 100%;
  }
}
@media screen and (min-width: 400px) {
  #paypal-button-container {
    width: 250px;
    display: inline-block;
  }
}
</style>

<div class="jumbotron text-center">
  <h1 class="display-4">¡Paso Final!</h1>
  <p class="lead">Estás a punto de pagar con PayPal la cantidad de:</p>
  <h4>$<?php echo number_format($total, 2); ?></h4>
  <div id="paypal-button-container"></div>
  <hr class="my-4">
  <p>
    Los productos podrán ser descargados una vez que se procese el pago<br>
    <strong>(Para aclaraciones: jonathan@gmail.com)</strong>
  </p>
</div>

<script>
paypal.Buttons({
    style:{
    color: 'gold',
    shape: 'pill',
    label: 'checkout'
  },
  createOrder: function(data, actions) {
    return actions.order.create({
      purchase_units: [{
        amount: {
          value: '<?php echo $total; ?>',
        
        }
      }]
    });
  },
  onApprove: function(data, actions) {
    return actions.order.capture().then(function(details) {
      alert('Pago completado por: ' + details.payer.name.given_name);
    });
  }
}).render('#paypal-button-container');
</script>