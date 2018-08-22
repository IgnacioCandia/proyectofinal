<?php
 $bd_host = "localhost";
 $bd_user = "root";
 $bd_pass = "";
 $bd_name = "base_de_datos";
 $conectar = mysqli_connect($bd_host, $bd_user, $bd_pass, $bd_name,3306);

 if(!$conectar){
	echo 'error al conectarse';
}
else{
	echo '';
}
?>
