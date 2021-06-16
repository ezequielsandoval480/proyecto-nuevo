<?php
include "cart.php";
include"templates/cabecera.php";
 ?>
<?php
$sentencia=$pdo->prepare ("SELECT * from marcas where id=".$_GET['id']);
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach ($listaProductos as $producto) { ?>

 <h2><?php echo $producto['Nombre'] ?></h2>
 <style> 

 h2{
 	margin:50px;
 	font-family:Verdana;
 	color:#01454f;
 }

 </style>
 <?php  
include "index.php";
include "templates/pie.php";

}
 ?>