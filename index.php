<?php 
 ?>
	<link rel="stylesheet" href="css/modal.css">
<body> 

	
<section class="sesion">
 
<?php 
//se realiza la conexión con el localhost
include"conexiondb/conexion.php";
$re=$cn->query("select * from comprass") or die();
while ($f=$re->fetch_array())
{
 ?>
    <div class="producto">
	<center>
		<img src="./productos/<?php echo $f['imagen'];?>"><br>	
		<span><?php  echo $f['Nombre'];?></span><br>
		<a href="catprueba.php?id=<?php echo $f['id'];?>">ver</a>
	  </center>
	</div>

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