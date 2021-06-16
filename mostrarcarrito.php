<?php 
include "cart.php";
include"templates/cabecera.php";
 ?>

 <br>
 <h3>lista del carrito</h3>
 <style>
   h3{
    margin-left:20px;
   }
 </style>
 <?php if(!empty($_SESSION['carrito'])){ ?>

 <table class="table table-light table-bordered">
 	<thead class="thead-dark">
 		<tr>
 	<th scope="col">Imagen</th>
     <th scope="col">Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Total</th>
       <th scope="col">Eliminar</th>
    </tr>
 		 </thead>
 		<tbody>
 	<?php $total=0;?>
 	<?php foreach ($_SESSION['carrito'] as $indice=>$producto) {?>
      <tr>
      <td class="pt-5"><?php echo $producto['id'];?></td>
      <td class="pt-5"><?php echo $producto['Nombre'];?></td>
      <td class="pt-5"><?php echo $producto['Cantidad'];?></td>
      <td class="pt-5"><?php echo $producto['precio'];?></td>
      <td class="pt-5"><?php echo number_format ($producto['precio']*$producto['Cantidad'],2);?></td>

      <form action="" method="post">
      	<input type="hidden"
      	 name="id" 
      	 value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>">

    <td class="pt-5"><button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar"><i class="icon ion-md-trash">Eliminar</i></button>

       </form>
      </td>
    </tr>
<?php $total=$total+($producto['precio']*$producto['Cantidad']); ?>
<?php } ?>
  
 <tr>
<td colspan="3" align="right"><h3>Total</h3></td>
<td align="right"><h3>$<?php echo number_format($total,2)?></h3></td>
 <td></td>
 <tr>


  <td colspan="5">

  <form action="pago.php" method="post">

    <div class="alert alert-success">
    <div class="form-group">
      <label for="my-input">Correo de contacto</label>
      <input id="email" name="email" 
      class="form-control" 
      type="email"
      placeholder="Por favor escribe tu correo"
      required>  
     </div>

     <small id="emailHelp"
     class="form text text-muted"
     >
     Los productos se enviarán a este correo.  
     </small>
      
    </div>
    <button class="btn btn-primary btn-lg btn-block" type="submit" 
     name="btnAccion"
    value="proceder">
      Proceder a pagar 
    </button>
  </form>
   </td>
   
 </tr>
</tr>
  </tbody>
 </table>

<?php }else{ ?>
	<div class="alert alert-success">
		no hay productos en el carrito...
	</div>
<?php } ?>



 <a href="inicio.php" class="btn btn-primary">Seguir comprando</a>
 

 <?php 
include"templates/pie.php";

  ?>