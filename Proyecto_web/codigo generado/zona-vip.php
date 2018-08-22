<!DOCTYPE html>
<html>
    <head>
        <title> ZONA VIP</title>
    </head>
    <body>
        <?php
        session_start();
        if (!isset($_SESSION["user"]))
        {
            header("Location:Login.html");
        }
        ?>
        <h1>ZONA VIP</h1>
        <?php
        printf("Usuario: %s", $_SESSION["user"]);
        ?>
        <br><a href="cerrar-session.php">cerrar Sesi&oacute; n</a>
    </body>
</html>