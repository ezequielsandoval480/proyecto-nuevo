<?php
include "conexiondb/conexion.php";
include"cabecera.php";
$sql="SELECT * from marcas where id=".$_GET['id'];
$re=$cn->query($sql);

while ($f=$re->fetch_array()){
 ?>

 <link rel="stylesheet" href="css/inicio.css">

 <h2><?php echo $f['Nombre'] ?></h2>
 <style> 

 h2{
 	margin:50px;
 	font-family:Open sans;
 	color:#01454f;
 }

 </style>
 <?php  
 include "index.php";
}
 ?>