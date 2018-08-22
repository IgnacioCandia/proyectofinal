<!DOCTYPE html>
<html>
    <head>
        <title>cerrar Sesi&oacute;n</title>
    </head>
    <body>
        <?php
        session_start();
        session_destroy();
        header("Location:login.html");
        ?>
    </body>
</html>