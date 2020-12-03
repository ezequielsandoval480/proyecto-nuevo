<?php 
include("cabecera.php");
//se establece la cabecera del menu principal
 ?>
 <title>Categorias</title>


	
</section>

 <section class="sesion">
 <link rel="stylesheet" href="css/modal.css">
<?php 
//se realiza la conexión con el localhost
include"conexiondb/conexion.php";
$re=$cn->query("select * from comprass where id=".$_GET['id']) or die ("error");
 while ($f=$re->fetch_array())
 {
 ?>

    <div class="producto">
	<center>
		<img src="./productos/<?php echo $f ['imagen'];?>"><br>	
		<span><h3><?php  echo $f['Nombre'];?></h3></span><br>
		<span><h3>Precio:<?php  echo $f['precio'];?></h3></span><br>
		<a href="cart.php?id=<?php echo $f['id'];?>">Añadir al carrito de compra</a>
	</center>	
	</div>
	</section>
    <?php
// agregarProducto: la clase es de  javascript y se encuentra ubicado en scripts.js
  }
    
   ?>

</section>

<?php 
include("pie.php");
 ?>

</body>
</html>