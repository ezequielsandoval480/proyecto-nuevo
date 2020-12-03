<?php 
include"conexiondb/conexion.php";
//Recibo los datos y los almaceno en variables

$usuario = $_POST['usuario'];

$password = $_POST['password'];

$correo = $_POST['correo'];

$Teléfono = $_POST['Teléfono'];

//consulta para insertar
$insertar="INSERT into usuarios (usuario, password,correo, Teléfono) VALUES ('$usuario', '$password' ,'$correo' ,'$Teléfono')"; 
//Ejecutar consulta
$re=$cn->query($insertar);

//$verificar_usuario= $cn->query( "SELECT * FROM usuarios WHERE usuario= '$usuario'");

//if(mysqli_num_rows($verificar_usuario)>0){
//	echo '<script> alert("El usuario ya esta registrado");window.history.go(-1)</script>';
//	exit;
//}

//$verificar_password= $cn->query( "SELECT * FROM usuarios WHERE password= '$password'");

//if(mysqli_num_rows($verificar_password)>0){
//	echo '<script> alert("La contraseña ya esta registrado");window.history.go(-1)</script>';
//	exit;
//}

//$verificar_correo= $cn->query( "SELECT * FROM usuarios WHERE correo= '$correo'");

//if(mysqli_num_rows($verificar_correo)>0){
//	echo '<script> alert("El correo ya esta registrado");window.history.go(-1)</script>';
//	exit;
//}

//$verificar_Telefono= $cn->query( "SELECT * FROM usuarios WHERE Teléfono= '$Teléfono'");

//if(mysqli_num_rows($verificar_Telefono)>0){
//	echo '<script> alert("El teléfono ya esta registrado");window.history.go(-1)</script>';
//	exit;
//}

//ejecutar consulta
if(!$re){
	echo 'Error al registrarse';
}else{
	echo '<script> alert("Usted ha sido registrado exitosamente");window.history.go(-1)</script>';
}
//cerrar sesión
//msql_close($cn);

 ?>