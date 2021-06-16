<?php 
session_start();
 $arreglo=$_SESSION['proyecto tienda online'];

 //chequeo si existe el ID enviado
  if(isset($_POST['Id']) && intval($_POST['Id'])){

    foreach ($arreglo as $key => $value) {
      print_r($value);
      if($value['Id'] == intval($_POST['Id'])){
        print_r($key);
        $indice = $key;
      }

    }

    
    if(isset($indice)){
      unset($arreglo[$indice]);
      $_SESSION['proyecto tienda online'] = $arreglo;
      echo '1';
    } else {
      echo '0';
    }

}
?>