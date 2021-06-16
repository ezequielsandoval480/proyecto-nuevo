<?php  
include "conexiondb/config.php";
include "conexiondb/conexion.php";
include"cart.php";
include"templates/cabecera.php";
 ?>


 <?php 
if($_POST){
$total=0;
$SID=session_id();
$Correo=$_POST['email'];

foreach ($_SESSION['carrito'] as $indice=>$producto){
  $total=$total+($producto['precio']*$producto['Cantidad']);

}
$sentencia=$pdo->prepare("INSERT into `pago` (`id`, `Clave transacción`, `Paypal datos`, `Fecha`, `correo`, `Total`, `status`) VALUES (NULL,:Clavetransaccion, '', NOW(),:Correo,:Total, 'pendiente');");
  $sentencia->bindParam(":Clavetransaccion",$SID);
  $sentencia->bindParam(":Correo",$Correo);
  $sentencia->bindParam(":Total",$total);
  $sentencia->execute();
  $idVenta=$pdo->lastInsertId();

  foreach ($_SESSION['carrito'] as $indice=>$producto){
   $sentencia=$pdo->prepare("INSERT INTO `DetalleVenta` (`id`, `idVenta`, `idProducto`, `preciounitario`, `Cantidad`) VALUES (NULL,:idVenta,:idProducto,:preciounitario,:Cantidad);");
   $sentencia->bindParam(":idVenta",$idVenta);
   $sentencia->bindParam(":idProducto",$producto['id']);
   $sentencia->bindParam(":preciounitario",$producto['precio']);
   $sentencia->bindParam(":Cantidad",$producto['Cantidad']);
    $sentencia->execute();

  }



}

  ?>

<div class="jumbotron text-center">
  <h1 class="display 4">¡Paso Final!</h1>
  <hr class="my 4">
  <p class="lead">Estas a punto de pagar con paypal la cantidad de:
   <h4>$<?php echo number_format($total,2 ); ?></h4>
  </p> 
  <p><strong>(para aclaraciones:ezequielsandoval480@gmail.com)</strong></p>
   <div id="paypal-button-container"></div>
</div>

<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>
<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({

        // Set up the transaction
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '<?php echo $total;?>'
                    },
                    description:"Compra de productos <?php echo  number_format($total,2);?>",
                    custom:"<?php echo $SID;?>#<?php echo openssl_encrypt($idVenta,COD,KEY);?>"

                }]
            });
        },

        env: 'sandbox', // sandbox | production
        style: {
            label: 'checkout',  // checkout | credit | pay | buynow | generic
            size:  'responsive', // small | medium | large | responsive
            shape: 'pill',   // pill | rect
            color: 'gold'   // gold | blue | silver | black
        },

         client: {
            sandbox:    'AR6fz855dIRPMk2BJpjDmth0p8BzlXXWWlroEsZNB2ZCYR096TSGSi4dH-hKA5OryGb68SwaF12pyR6I',
            production: 'AVZijaTx7ZaRWdhkuD5lrgOYeQzKyuM5KfEXuhLbI0pCnZ92XDxNv2zrDRmPK3gU5YpH26SJ0h4ZUE_M'
        },

        /*payment: function(data,actions){
          return actions.payment.create({
            payment: {
               transactions: [
               {
                amount:{ total: '<?php echo $total;?>', currency : 'USD'}
                description:"compra de productos a develoteca:$<?php echo number_format($total,2)?>",
                custom:"<?php echo $SID;?>#<?php echo openssl_encrypt($idVenta,COD,KEY);?>"
                }

             ]
            }
          });
        },*/
        // Finalize the transaction
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                // Show a success message to the buyer
               console.log(data);
               window.location="verificador.php?paymentToken="+data.paymentToken+"&authorization_id="+data.authorization_ID;
             
            });
        }
    }).render('#paypal-button-container');
</script>


 
</script>
 

</head>

<body>

</body>

</html>


<?php 
include "templates/pie.php";
 ?>