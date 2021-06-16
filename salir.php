<?php 
include "conexiondb/config.php";
include "conexiondb/conexion.php";
$eliminar=$_POST['eliminar'];
$usuarioeliminado=$pdo->prepare("DELETE FROM usuarios WHERE Id= $eliminar");
$usuarioeliminado->execute();
echo "eliminado correctamente";
header("location:inicio.php");
 ?>