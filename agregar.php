<?php 
session_start();

if(isset($_SESSION['productoscart'])){
	$productos = $_SESSION['productoscart'];
} else {
	$productos = array();
}

//chequeo si existe el ID enviado
if(isset($_POST['Id'])){
    
  $productos[] = array('id' => $_POST['id'],'cantidad' => 1);
     
}

?>