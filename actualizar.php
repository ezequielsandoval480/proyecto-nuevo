<?php 
session_start();
include './conexion.php';
if (isset($_SESSION['productoscart'])){
		$arreglo=$_SESSION ['productoscart'];
		$encontro=false;
		$numero=0;
		for ($i=0;$i<count($arreglo);$i++){
			if($arreglo[$i]['Id']==$_GET['id']){
				$encontro=true;
			    $numero=$i;
			}
		}
		 if($encontro==true){
			    	$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
			    	$_SESSION ['productoscart']=$arreglo;
		 }else{
                $nombre="";
			    $precio=0;
			    $imagen="";
                $re=$cn->query("insert * from productos where id=" .$_GET ['id']);
			     while ($f=$re->fetch_array()) {
			    	$nombre=$f['Nombre'];
			    	$precio=$f['precio'];
			    	$imagen=$f['imagen'];
			     }
			    $datosNuevos=array('Id'=>$_GET['id'],
			                'Nombre'=>$nombre,
			                'precio'=>$precio,
			                'imagen'=>$imagen,
			                'Cantidad'=>"");
			    
			    array_push($arreglo,$datosNuevos);
			    $_SESSION['productoscart']=$arreglo;

		 }

		}else{
				if(isset($_GET['id'])){
			    $nombre="";
			    $precio=0;
			    $imagen="";
                $re=$cn->query("insert * from productos where id=" .$_GET ['id']);
			     while ($f=$re->fetch_array()) {
			    	$nombre=$f['Nombre'];
			    	$precio=$f['precio'];
			    	$imagen=$f['imagen'];
			    	    }
			    $arreglo[]=array('Id'=>$_GET['id'],
			                'Nombre'=>$nombre,
			                'precio'=>$precio,
			                'imagen'=>$imagen,
			                'Cantidad'=>1);
                $_SESSION['productoscart']=$arreglo;
   
			}
		}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carrito de compras</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="modal.css">
	<meta http-equiv="Content-type" content="text/html">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="./scripts.js"></script>
	 <script type="text/javascript">
	 	function openVentana(){
$(".ventana").slideDown("slow");
}

 	function closeVentana(){
$(".ventana").slideUp("fast");
}


	 </script>

   
	<img src="mohe.png" alt="">
	
	<ul>
	<a href="javascript:openVentana();"><span class="icon-user">Registrarse</span></a>
	</ul>

    <ul>
	<a href=""><span class="icon-search"></span>
    <input type="text" name="" value=""></a>
    </ul> 


</head>

<body> 

<div class="container">
	<div class="ventana">
		
		<div class="form">
			<div class="cerrar"><a href="javascript:closeVentana();">Cerrar X</a></div>
			<h2>Registrarse</h2>
			<form>
			 <table>
				<tr>
				 <td>Nombre:</td>
				 <td><input type="text" placeholder="&#128273;usuario" name="usuario"></td>
				</tr>

				<tr>
				<td>Contraseña:</td>
				<td><input type="password" placeholder="&#128273;ingresa tu contraseña" name="contraseña"></td>
				</tr>
               
                <tr>
				<td></td>
				<td><input type="submit" placeholder="ingresar"></td>
				</tr>



			</table>
		</form>
	</div>	
</div>
</div>

	<header>

		<div id="menu">
			
		<ul class="nav">
		<li><a href=""><span class=""></span>Categorías</a>
		<ul class="sub-nav">
			<li><a href=""><span class=""></span>Marcas</a></li>
			<li><a href=""><span class=""></span>Tipos</a></li>
		</ul>
	</li>
		<li><a href=""><span class="icon-coin-dollar"></span>Formas de pago</a></li>

		<li><a href=""><span class=""></span>Contacto</a></li>
		</ul>

     <ul class="carrito">
      <li><a href=""><span class="icon-cart">Carrito</span></a></li>
</ul>

	</header>
     <ul>
</div>


<section class="banner">
	<div class="banner-content">
	</div>
</section>

 <section class="sesion">
<?php

  $total=0; 
    if(isset($_SESSION['productoscart'])){
	$datos=$_SESSION ['productoscart'];
	$total=0;
	for($i=0;$i<count($datos);$i++){
?>
    
	<div class="producto">
         	<center>
		<img src="./productos/<?php echo $datos[$i]['imagen'];?>"><br>
		<span><h3><?php echo $datos[$i]['Nombre']?></h3></span><br>
 		<span><h3>Precio:<?php echo $datos[$i]['precio']?></h3></span><br>
 		<span><h3>Cantidad:</h3></span><br>
		<span><h3><input type="text" value="<?php echo $datos[$i]['Cantidad']?>"
			data-precio="<?php echo $datos[$i]['precio']?>"
			data-id="<?php echo $datos[$i]['Id']?>"
			class="cantidad">
		</h3></span><br>
		<span class="subtotal"><h3>subtotal:<?php echo $datos[$i]['precio']*$datos[$i]['Cantidad']?></h3></span><br>
		</center>
	</div>


<?php

$total=($datos[$i]['Cantidad']*$datos[$i]['precio'])+$total; 

}
	} else{
	echo '<center><h2>El carrito de compra está vacío</h2><center>';
	}
	echo '<center><h2 id="total">Total: '.$total.'</h2></center>';



?>
</section>
<center><a href="./index.php">Ver catálogo</a></center>
<center><a href="cerrar_session.php">Cerrar sesion</a></center>

</body>
</html>