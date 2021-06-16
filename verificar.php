<?php 
include ("conexiondb/con.php");
$re=$cn->query("SELECT * FROM user ORDER BY id DESC")or die ();

if(!$re){
	header("Location./formulario.php?error=datos no validos");
}else{
while($f=$re->fetch_array()) {
	echo '<script> alert("Usted ha iniciado sesión exitosamente");window.history.go(-2)</script>';
}}

/*if(isset($resultado)){
	$_SESSION['Usuario']=$resultado;
	echo '<script> alert("Usted ha sido registrado exitosamente");window.history.go(-2)</script>';
}else{
	header("Location:../formulario.php?error= datos no validos");
}
*/
 ?>