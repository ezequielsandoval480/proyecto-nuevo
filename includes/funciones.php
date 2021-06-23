<?php

//tenes que hacer las funciones asi
function buscarProducto($nombreproducto){
    global $db;
    $results = $db->table("productos")->select()
    ->where("nombre = :nombre")->bind(array("nombre" => $nombreproducto))->exec();

    return $results;
}


function getUser($usuario,$password){
    
    global $db;

    $results = $db->table("user")->select()
        ->where("usuario = :usuario AND password = :password")
        ->bind(array(
            "usuario" => $usuario,
            'password' =>$password
        ))->exec();

return $results;
 }


function registrarUsuario($usuario,$password,$correo,$telefono){
    global $db;
    $results = $db->table("user")->insert()
        ->where("usuario = :usuario AND password = :password AND correo = :correo AND telefono = :telefono")
        ->bind(array(
            "usuario" => $usuario,
            'password' =>$password,
            "correo" => $correo,
            "telefono" =>$telefono
        ))->exec();
    if(!empty($results)){
        $_SESSION['id']=$results[0]['id'];
        $_SESSION['usuario'];

   //redirigir al inicio 

    }else{

    }
}

function estaLogueado ($redirect=''){
    if(isset($_SESSION['id'])){
        return true;
    }else{
         return false;
        }
    }

function redirectTo($to=''){
    $protocol = 'http://';
    $domainName = $_SERVER['HTTP_HOST'].'/';
    $base =  $protocol.$domainName;

    header("Location: " .$base . $to);
    exit();
}


?>



