<?php
	include 'conexion.php';
    $cli = $_POST["cliente"];
	$nom = $_POST["nombre_producto"];
	$cant = (int)$_POST["cantidad_producto"];
     $conectar = mysqli_connect($bd_host, $bd_user, $bd_pass, $bd_name,3306);
	$insertar = "INSERT INTO pedido(cliente,nombre_producto, cantidad_producto) VALUES
	('$cli','$nom', '$cant')";

	$resultado = mysqli_query($conectar, $insertar);
	if (!$resultado){
			echo"OCURRIO UN ERROR";
		}else{
			echo"EL PEDIDO FUE HECHO CORRECTAMENTE<br><a href='ordenpedido.html'>Volver</a>";
		}
	
	mysqli_close($conectar);
?>
