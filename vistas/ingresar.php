<?php 
//aca detectamos si esta logueado
if(estaLogueado()){
    //Si ya esta logueado redirigimos al home
    redirectTo('?pagina=inicio');
}

include "parciales/header.php";
 ?>
<section class="fdb-block bg-dark bg-image-over">
	<div class="container">
		<div class="row">
			 <div class="col-md-8 mx-auto">

			 	<?php if(isset($mensaje)) :?>
                <div class="alert alert-warning"><?php echo $mensaje;?></div>
            <?php endif;?>

		   <form id="Iniciar" method="post">
		 	  <div class="form">
			  <h3 class="mb-4">Iniciar Sesión</h3>
		        <input type="hidden" name="action" value="loguear_usuario">
		        <div class="form-group">
				<input type="text" id="usuario" class="form-control" placeholder="&#128273;usuario" name="usuario">
				</div>
				<div class="form-group">
				<input type="password" id="password" class="form-control" placeholder="&#128273;ingresa tu contraseña" name="password">
				</div>
				<input type="submit" class="btn btn-warning" value="Iniciar sesión">		
	         </div>
           </form>
       </div>
     </div>
	</div>
</section>

