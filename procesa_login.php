<?php
include "con.php"; 
$nombre=$_POST['usuario'];
$contraseña=$_POST['password'];
$correo=$_POST['correo'];
$Teléfono=$_POST['Teléfono'];
$insertar=" INSERT INTO usuarios ( Id, usuario, password, correo, Teléfono) VALUES ( null, '$nombre' , '$contraseña', '$correo', '$Teléfono')";
$re=$cn->query( $insertar);
if(!$re){
	echo 'Error al registrarse';
}else{
	echo '<script> alert("Usted ha sido registrado exitosamente");window.history.go(-1)</script>';
}
?>
