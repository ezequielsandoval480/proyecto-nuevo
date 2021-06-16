<?php 

$conexion= mysqli_connect("localhost", "root", "", "carritoactualizado2");
$cn= new mysqli("localhost", "root", "", "carritoactualizado2") or die ("no se puede establecer la conexion");

if(!$conexion){
	echo 'Error al conectar a la base de datos';
}
else{

	echo 'Conectado a la base de datos';

}

 ?>