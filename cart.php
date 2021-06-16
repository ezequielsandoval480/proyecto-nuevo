<?php 
session_start();

$mensaje="";

if(isset($_POST['btnAccion'])){
  switch (($_POST['btnAccion'])){
    
    case 'Agregar':

    if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
      $ID=openssl_decrypt($_POST['id'], COD,KEY);
      $mensaje.="Ok ID correcto".$ID."<br/>";
    } else{
      $mensaje.="Upss... ID incorrecto".$ID."<br/>";
    }
 
    if(is_string( openssl_decrypt($_POST['Nombre'],COD,KEY))){
      $Nombre=openssl_decrypt($_POST['Nombre'],COD,KEY);
      $mensaje.="Ok Nombre".$Nombre."<br/>";

    }else{ $mensaje.="Ups algo pasa con el nombre"."<br/>"; break;}

    if(is_string( openssl_decrypt($_POST['Cantidad'],COD,KEY))){
      $Cantidad=openssl_decrypt($_POST['Cantidad'],COD,KEY);
      $mensaje.="Ok Cantidad".$Cantidad."<br/>";

    }else{ $mensaje.="Ups algo pasa con la cantidad"."<br/>"; break;}

    
    if(is_string( openssl_decrypt($_POST['precio'],COD,KEY))){
      $Precio=openssl_decrypt($_POST['precio'],COD,KEY);
      $mensaje.="Ok precio".$Precio."<br/>";
    }else{ $mensaje.="Ups algo pasa con el precio"."<br/>"; break;}
      
  
  if(!isset($_SESSION['carrito'])){

    $producto=array(
    'id'=>$ID,
    'Nombre'=>$Nombre,
    'Cantidad'=>$Cantidad,
    'precio'=>$Precio
    );
    $_SESSION['carrito'][0]=$producto;
    $mensaje="Producto agregado al carrito";

  }else{

    $idProductos=array_column($_SESSION['carrito'],"id");
    if(in_array($ID,$idProductos)){
      echo"<script>alert('El producto ya ha sido seleccionado');</script>";

    }else{



    $NumerosProductos=count($_SESSION['carrito']);
    $producto=array(
    'id'=>$ID,
    'Nombre'=>$Nombre,
    'Cantidad'=>$Cantidad,
    'precio'=>$Precio
    );

    $_SESSION['carrito'][$NumerosProductos]=$producto;

   $mensaje= print_r($_SESSION,true);
    
       }
    }

    break;
    case "Eliminar";
    if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
      $ID=openssl_decrypt($_POST['id'],COD,KEY);

    foreach ($_SESSION['carrito'] as $indice=>$producto) {
      if($producto['id']==$ID){
        unset($_SESSION['carrito'][$indice]);
        echo "<script>alert('Elemento borrado...');</script>";

      }
    }
    } else{
      $mensaje.="Upss... ID incorrecto".$ID."<br/>";
    }

    break;
  }
}
 ?>
<?php 
include "templates/pie.php";
 ?>