<?php 
include("templates/cabecera.php");
include("cart.php");

 ?>

 <title>Categorias</title>


 <div class="alert alert-success">

 	<?php echo $mensaje ;?>
  
    
			<a href="mostrarcarrito.php" class="bagde badge-success"> Ver carrito</a>
		</div>

 <section class="sesion">

<?php 
 $sentencia=$pdo->prepare("select * from comprass where id=".$_GET['id']);
 $sentencia->execute();
 $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
 print_r($listaProductos);

 ?>


   <?php foreach ($listaProductos as $producto) { ?>
  
    <div class="col-3">
    <div class="card-img-top" margin="30px">
	<center>
		<img height="130px"
		src="./productos/<?php echo $producto ['imagen'];?>" data-bs-toggle="popover" popoverTriggerList="hover" data-bs-content="<?php echo $producto ['descripción'];?>" ><br>
		<span><h5 class="card-title"><?php  echo $producto['Nombre'];?></h5></span><br>
		<span><h5>Precio:<?php  echo $producto['precio'];?></h5>
		</span><br>
		

		<form action="" method="post">

		<input type="text" name="id" id="id" value="<?php  echo openssl_encrypt($producto['id'],COD,KEY);?>">
		<input type="text" name="Nombre" id="Nombre"value="<?php  echo   openssl_encrypt($producto['Nombre'],COD,KEY);?>">
		<input type="text" name="precio" id="precio"value="<?php  echo  openssl_encrypt($producto['precio'],COD,KEY) ;?>">
		<input type="text" name="Cantidad" id="Cantidad"value="<?php  echo  openssl_encrypt(1,COD,KEY);?>">

		<button class="btn btn-primary"name="btnAccion" value="Agregar" type="submit" >Añadir al carrito de compra</button>	

		</form>
	</center>
	</div>	
	</div> 
	</section>
    <?php
  }
    
   ?>

</section>

<script>
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
</script>

<?php 
include"templates/pie.php";
 ?>


</body>
</html>