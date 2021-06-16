<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	
	<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    
 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/icon.css">
	
	<title>Cabecera</title>
	<img src="mohe.png" alt="">
    <ul>

	<a href="formulario.php"class="icon-user">
		 
       <?php 
    include "conexiondb/config.php";
    include "conexiondb/conexion.php";
    $usuarioregistrado=$pdo->prepare( "SELECT * FROM usuarios limit 1");
    $usuarioregistrado->execute();
    $datosusuario=$usuarioregistrado->fetchAll(PDO::FETCH_ASSOC);
     ?>

    <?php foreach($datosusuario as $usuario) { ?> 

     <?php if(isset($usuario)){
       echo $usuario['usuario'];
     }else{ 
	     echo "no registrado";
     }
      ?> 

 <?php 
   }
 ?>

	</a>
	 <form id="Eliminar" action="salir.php" method="post">
   <input type="submit" name="eliminar" value="Salir">
   </form>

	</ul>
    <ul>
	<a href="" class="icon-search"><input type="text" name="" value=""></a></ul> 

</head>
<body>


       <div class="button-menu">
			<a href="#" class="bt-menu"><span class="icon-menu"></span></a>
  </div>
	<header>
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="inicio.php"><span class="icon-home"></span>Inicio</a></li>
				<li><a href=""><span class="icon-indent-increase"></span>Categorías</a>
 		
 					<ul class="sub-nav">
						<li><a href="""#">Marcas</a>
							<ul class="sub-sub-nav">
								<?php  
								$sentencia=$pdo->prepare("select * from marcas");
								$sentencia->execute();
                                $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                ?>
								 <?php foreach ($listaProductos as $producto) { ?>
			 					<li><a href="marcas.php?id=<?php echo $producto['Id'];?>"><?php echo $producto['Nombre']?></a>
			 				   <?php } ?>
			 	 			 </ul>
			 	 		   </li>
						</ul>
						
				</li>
				<li><a href="inicio.php"><span class="icon-coin-dollar"></span>Forma de pago</a></li>
				<li><a href="inicio.php"><span class="icon-mobile"></span>Contacto</a></li>
				<li><a href="cerrarsesion.php">Cerrar sesión</a></li>
				<li><a class="nav-link" href="mostrarcarrito.php"><span class="icon-cart"></span>Carrito(<?php echo (empty($_SESSION['carrito']))? 0:count($_SESSION['carrito']);?>)</a></li>
			</ul>	
		</nav>
	</header>


<div class="banner">
	<div class="banner-content">
	<h1 class="titulo1">Tienda online</h1>
	<h4 class="titulo3">Piezas</h4>
	<h4 class="titulo4">Autopartes</h4>
	</div>
</div>
</body>