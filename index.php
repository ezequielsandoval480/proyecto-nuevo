
<link rel="stylesheet" href="css/modal.css">
<body> 	
<section class="sesion">
 
    	<?php 
    $sentencia=$pdo->prepare("select * from comprass");
    $sentencia->execute();
    $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($listaProductos);
    	 ?>

    <?php foreach ($listaProductos as $producto) { ?>
    	<div class="producto">
    	<center>
		<img src="./productos/<?php echo $producto['imagen'];?>"><br>	
		<span><?php  echo $producto['Nombre'];?></span><br>
		<a href="catprueba.php?id=<?php echo $producto['id'];?>">ver</a>
	  </center>
	
	</div>
     <?php }?>
</section>
</body>
</html>