<?php 

//aca detectamos si esta logueado
if(estaLogueado()){
    //Si ya esta logueado redirigimos al home
    redirectTo('');
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
	             <form id="registro"  method="post">
	             	<div class="form">
			      <h3 class="mb4">Crea tu cuenta</h3>  
			        <input type="hidden" name="action" value="registrarUsuario">
			        <div class="form-group">
			    	<input type="text" id="usuario" class="form-control"  placeholder="&#128273;usuario a registrar" name="usuario">
			        </div>
			        <div class="form-group">
			    	<input type="password" id="password" class="form-control" placeholder="&#128273;ingresa tu contraseña" name="password">
			    	</div>
			    	<div class="form-group">
				   <input type="email" id="correo" class="form-control" placeholder="&#128273;ingresa tu correo" name="correo">
				   </div>
                    <div class="form-group">
				   <input type="text" id="telefono" class="form-control"  placeholder="&#128273;ingresa tu telefono" name="telefono">
				   </div>
				   <input type="submit" class="btn btn-warning" value="Registrarse">
				</div>
	             </form>
	        </div>
	    </div>
	</div>
	 
</section>
