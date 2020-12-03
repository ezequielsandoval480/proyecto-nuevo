<?php 
session_start();
include("conexiondb/conexion.php");

	//Chequeo si existen productos en mi session agregados


// if (isset($_SESSION['proyecto tienda online'])){
// 	$sesion = true;
// } else {
// 	$sesion = false;
// }

// Lo de arriba se puede poner asi
 
$sesion = (isset($_SESSION['proyecto tienda online'])) ? true : false;

if($sesion){
	$productoscart = $_SESSION['proyecto tienda online'];
}


	// $arreglo = $_SESSION ['proyecto tienda online'];
	// $encontro=false;
	// $numero=0;

	// 	for ($i=0;$i<count($arreglo);$i++){
	// 		if($arreglo[$i]['Id']==$_GET['id']){
	// 			$encontro=true;
	// 		    $numero=$i;
	// 		}
	// 	}

	//  	if($encontro==true){
	// 	    $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
	// 	    $_SESSION ['proyecto tienda online']=$arreglo;

	//  	} else{
 //            $nombre="";
	// 	    $precio=0;
	// 	    $imagen="";
 //            $re=$cn->query("select * from comprass where id=" .$_GET ['id']);
	// 	     while ($f=$re->fetch_array()) {
	// 	    	$nombre=$f['Nombre'];
	// 	    	$precio=$f['precio'];
	// 	    	$imagen=$f['imagen'];
	// 	     }
	// 	    $datosNuevos=array('Id'=>$_GET['id'],
	// 	                'Nombre'=>$nombre,
	// 	                'precio'=>$precio,
	// 	                'imagen'=>$imagen,
	// 	                'Cantidad'=>1);
		    
	// 	    array_push($arreglo,$datosNuevos);
	// 	    $_SESSION['proyecto tienda online']=$arreglo;

	//  	}

	// } else{
	// 		if(isset($_GET['id'])){
	// 	    $nombre="";
	// 	    $precio=0;
	// 	    $imagen="";
 //            $re=$cn->query("select * from comprass where id=" .$_GET ['id']);
	// 	     while ($f=$re->fetch_array()) {
	// 	    	$nombre=$f['Nombre'];
	// 	    	$precio=$f['precio'];
	// 	    	$imagen=$f['imagen'];
	// 	    	    }
	// 	    $arreglo[]=array('Id'=>$_GET['id'],
	// 	                'Nombre'=>$nombre,
	// 	                'precio'=>$precio,
	// 	                'imagen'=>$imagen,
	// 	                'Cantidad'=>1);
 //            $_SESSION['proyecto tienda online']=$arreglo;

	// 	}
	// }


?>


<?php
include "cabecera.php";

//Itero sobre los productos guardados si existen en mi sesion

if($sesion && count($productos) > 0){
	print_r('Hay productos guardados');
}

//   $total=0; 
//     if(isset($_SESSION['proyecto tienda online'])){
// 	$datos=$_SESSION ['proyecto tienda online'];
// 	$total=0;

// 	print_r($datos);
// 	for($i=0;$i<count($datos);$i++){
// ?>
    


// 	<ul class="product">
		
// 		<br><img src="./productos/<?php echo $datos[$i]['imagen'];?>"><br><br>
		
// 		<span><h3><?php echo $datos[$i]['Nombre'];?></h3></span><br>

// 		<span></span>
 		
//        <span class="price"><h3>Precio $:<?php echo $datos[$i]['precio'];?></h3></span>
		
// 		<input data-price="<?php echo $datos[$i]['precio'];?>" class="qty" type="number" value="0">

// 		<h3>Subtotal:</h3>
		
// 		<h3><span class="subtotal"><?php echo $datos[$i]['precio']*$datos[$i]['Cantidad']?></span></h3>


<?php // la clase "eliminar" se ubica en scripts.php ?>
// 		<a href="" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">
// 			Eliminar
// 		</a>

		  
//       </ul>


// 	 </script>



// <?php

// $total=($datos[$i]['Cantidad']*$datos[$i]['precio'])+$total; 

// }
// 	} else{
// 	echo '<center><h2>El carrito de compra está vacío</h2><center>';
// 	}
// 	echo '<center><h2></h2></center>';
//    if($total!=0){
//    echo '<center><button><a href="compras.php" class="btn btn-primary btn sm" >Enviar</button></a></center>';  ESTO DIRIGE A COMPRAS.PHP 
// }



?>
</section>
<center><a href="./index.php">Ver catálogo</a></center>
<center><a href="cerrar_session.php">Cerrar sesion</a></center>



	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="menu.js"></script>
	<script type="text/javascript" src="scripts.js"></script>

	 <script type="text/javascript">
	 	function openVentana(){
$(".ventana").slideDown("slow");
}

 	function closeVentana(){
$(".ventana").slideUp("fast");
}


	 </script>


</body>
</html>