<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <!--ion icons-->
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/formulario.css">
	<link rel="stylesheet" href="css/icon.css">



	<title>Cabecera</title>
	<img src="mohe.png" alt="">
    <ul>

	<a href="javascript:openVentana();" class="icon-user">Registrarse</a>
	</ul>
    <ul>
	<a href="" class="icon-search"><input type="text" name="" value=""></a></ul> 

</head>
<body>
	<div class="contenedor-form">

		   <form action="registrar.php" method="post">

			<div class="cerrar"><a href="javascript:closeVentana();">Cerrar X</a></div>

			<div class="toggle">
				<span>Crear cuenta</span>
			</div>
			
		 	  <div class="form">
			  <h2>Iniciar Sesión</h2>
			
			    
				<input type="text" id="usuario" placeholder="&#128273;usuario" name="usuario">
				<input type="password" id="password" placeholder="&#128273;ingresa tu contraseña" name="password">
				<input type="submit" value="Iniciar sesión">
						
	         </div>

	        <div class="form">
			  <h2>Crea tu cuenta</h2>
			  
				<input type="text" id="usuario"placeholder="&#128273;usuario" name="usuario">
				<input type="password" id="password" placeholder="&#128273;ingresa tu contraseña" name="password">
				<input type="email" id="correo" placeholder="&#128273;ingresa tu correo" name="correo">
				<input type="text" id="Teléfono"placeholder="&#128273;ingresa tu teléfono" name="Teléfono">
				<input type="submit" value="Registrarse">
					
	        </div>


	         <div class="reset-password">
			   	<a href="#">Olvidé mi contraseña?</a>
	        </div>
	     
	</div>


       <div class="button-menu">
			<a href="#" class="bt-menu"><span class="icon-menu"></span></a>
  </div>
	<header>
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="#Section1"><span class="icon-home"></span>Inicio</a></li>
				<li><a href="#Section2"><span class="icon-indent-increase"></span>Categorías</a>
 				<form action="marcas.php" method="get">
 					<ul class="sub-nav">
						<li><a href="""#">Marcas</a>
							<ul class="sub-sub-nav">
								<?php 
								include "conexiondb/conexion.php";
								$sql="SELECT * from marcas";
								$re=$cn->query($sql);
								while ($f=$re->fetch_array()){
 								?>
			 					<li><a href="marcas.php?id=<?php echo $f['Id'];?>"><?php echo $f['Nombre']?></a>
			 						 <?php  
                                 }
                                ?>
			 	 			 </ul>
			 	 		   </li>
						</ul>
						
				</li>
				<li><a href="#Section3"><span class="icon-coin-dollar"></span>Forma de pago</a></li>
				<li><a href="#Section4"><span class="icon-mobile"></span>Contacto</a></li>
				<li><a href="#">Cerrar sesión</a></li>
				<li><a href="_carritodecompras.php"><span class="icon-cart"></span>Carrito</a></li>
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