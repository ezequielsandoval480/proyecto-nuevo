<?php 
include"conexiondb/con.php";

if(isset($_POST['Registrarse'])){
	if(strlen($_POST['usuario'])>=1 && strlen($_POST['password'])>=1 && strlen($_POST['correo'])>=1 && strlen($_POST['Teléfono'])>=1){

		//Recibo los datos y los almaceno en variables
        $usuario = trim($_POST['usuario']);

        $password = trim($_POST['password']);

        $correo = trim($_POST['correo']);

        $Teléfono = trim($_POST['Teléfono']);

        //consulta para insertar
        $insertar="INSERT INTO usuarios (usuario, password,correo, Teléfono) VALUES ('$usuario', '$password' ,'$correo' ,'$Teléfono')"; 

        $resultado=$cn->query( $insertar);

        if (empty($usuario) or empty($password) or empty($correo) or empty($Teléfono)){ 
        $errores='<li>Por favor rellena todos los datos</li>';
        }

        //ejecutar consulta
        if(!$resultado){
		echo 'Error al registrarse';
		}else{
		echo '<script> alert("Usted ha sido registrado exitosamente");window.history.go(-2)</script>';
}  
        
	}
}

//cerrar sesión
//msql_close($cn);

 ?>