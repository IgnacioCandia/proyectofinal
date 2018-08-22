<!DOCTYPE html>
<html>
<head>
    <title>Pedidos</title>
    </head>
    <body>
        <?php
        $bd_host = "127.0.0.1";
        $bd_user = "root";
        $bd_pass = "";
        $bd_name = "base_de_datos";
        
        $nom = htmlspecialchars($_POST["nombre_producto"]);
        $cant = (int)$_POST["cantidad_producto"];
        
        $conectar = mysqli_connect($bd_host,$bd_user,$bd_pass, $bd_name, 3306);
        
        if (mysqli_connect_errno())
        {
            printf ("ERROR : %u - %s", mysqli_connect_errno(), mysqli_connect_error());
            exit();
        }
        mysqli_set_charset($conectar, "utf8");
        $insertar = "INSERT INTO pedido (nombre_producto, cantidad_producto)
        VALUES ('$nom', '$cant')";
        
        if ($resultado = mysqli_query($conectar, $insertar))
        {
            printf("Pedido alamcenado");
        }
        else
        {
            printf("ERROR - producto no almacenado");
        }
        mysqli_close($conectar);
        ?>
    </body>
</html>