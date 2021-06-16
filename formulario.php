<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/formulario.css">

<body>
	<div class="contenedor-form">

		   <form id="Iniciar" action="verificar.php" method="post">
		   	<?php 
 			if(isset($_GET['error'])){
 				echo '<center>Datos no validos</center>';
 			}
		   	 ?>

			<div class="toggle">
				<span>Crear cuenta</span>
			</div>
			
		 	  <div class="form">
			  <h4>Iniciar Sesión</h4>
		
				<input type="text" id="user" placeholder="&#128273;user" name="User">
				<input type="password" id="contraseña" placeholder="&#128273;ingresa tu contraseña" name="Contraseña">
				<input type="submit" value="Iniciar sesión">
						
	         </div>
           </form>
	         <form id="registro" action="registrar.php" method="post">

	        <div class="form">
			  <h4>Crea tu cuenta</h4>
			  
				<input type="text" id="usuario"placeholder="&#128273;usuario a registrar" name="usuario">
				<input type="password" id="password" placeholder="&#128273;ingresa tu contraseña" name="password">
				<input type="email" id="correo" placeholder="&#128273;ingresa tu correo" name="correo">
				<input type="text" id="Teléfono"placeholder="&#128273;ingresa tu teléfono" name="Teléfono">
				<input type="submit" value="Registrarse" name="Registrarse">
					
	        </div>
	         </form>
	</div>
	 
</body>
<script src="js/jquery-3.5.1.min.js"></script>
 <script src="js/main.js"></script>	
