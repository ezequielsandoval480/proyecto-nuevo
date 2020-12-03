<?php 
include"cabecera.php";
 ?>
   
	<link rel="stylesheet" href="css/modal.css">
<body> 

<section class="sesion">
 
<?php 
//se realiza la conexión con el localhost

include"conexiondb/conexion.php";
$re=$cn->query("select * from comprass where id=".$_GET['id']) or die();
while ($f=$re->fetch_array())
{
 ?>
 
<link rel="stylesheet" href="bootstrap-4.5.3-dist">
<table class="table">
  <thead class="thead-dark">

    <tr>
      <th scope="col">Producto</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Subtotal</th>
       <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td><img src="./productos/<?php echo $f ['imagen'];?>" width="120" alt="..."></td></td>
      <td class="pt-5"><?php echo $f['precio'];?></td>
      <td class="pt-5"><input type="number" class="form-control" name="cant" value="1"></td>
      <td class="pt-5"><?php echo $f['precio'];?></td>
      <td class="pt-5"><button class="btn btn-danger" id="btn-delete"><i class="icon ion-md-trash"></i></button></td>
    </tr>
  
  </tbody>
</table>

<a href="" class="btn btn" >Seguir comprando</a>
<h2 class="text-right">Total<span></span></h2>
<script>
	$(function(){
		$(document).on("click", "#btn-delete", function(){
			$(this).parent().parent().remove();
		});

 
	$(document).on("keyup","input[name*=cant]",function(){
	
	var Subtutal=$(this).val()*$(this).closest("tr").find("td:eq(1)").html();
			
			(this).closest("tr").find("td:eq(3)").html(Subtutal.toFixed(2));
		});

	})

</script>
    <?php
   

    //se direcciona a categorías.php (se ubica en las distintas marcas (mbenz,peugeot,etc))
  }

    
   ?>

<?php 
include "pie.php";

 ?>

  
</section>

</body>
</html>