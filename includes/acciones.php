<?php

//Para recibir requests

if(isset($_POST['action']) &&  $_POST['action']=='loguear_usuario'){

    $resultados = getUser($_POST['usuario'],$_POST['password']);

    if(!empty($resultados)){
        $_SESSION['id'] = $resultados[0]['id'];
        $_SESSION['usuario'] = $resultados[0]['usuario'];
        redirectTo('?pagina=inicio');
    } else{
        $mensaje = 'No se ha encontrado el usuario';
    }

    //aca si es exitoso lo guardas en la sesion


}

if(isset($_POST['action']) &&  $_POST['action'] &&  $_POST['action']  &&  $_POST['action']=='registrarUsuario'){

    $resultados = registrarUsuario($_POST['usuario'],$_POST['password'],$_POST['correo'], $_POST['telefono']);

    if(!empty($resultados)){
        $_SESSION['id'] = $resultados[0]['id'];
        $_SESSION['usuario'] = $resultados[0]['usuario'];
        redirectTo('?pagina=inicio');
    } else{
        $mensaje = 'No se ha encontrado el usuario';
     }

 }