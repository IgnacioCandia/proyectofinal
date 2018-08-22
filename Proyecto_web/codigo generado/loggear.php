<!DOCTYPE html>
<html>
<head>
    <title></title>
    </head>
    <body>
        <?php
        try
        {
            $conMySQL = new PDO("mysql:host=localhost; port=3306; dbname=logear", "root", "");
            $conMySQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conMySQL->exec("SET CHARACTER SET UTF8");
            $sentenciaSQL = "SELECT * FROM usuario WHERE user = :login AND contra = :passw";
            $sentenciaPrep = $conMySQL->prepare($sentenciaSQL);
            
            $log=htmlspecialchars(addslashes($_POST["user"]));
            $pas=htmlspecialchars(addslashes($_POST["contra"]));
            $sentenciaPrep->execute(array(":login"=>$log, ":passw"=>$pas));
            $numRegistros = $sentenciaPrep->rowCount();
            if ($numRegistros !=0)
            {
                session_start();
                $_SESSION["usuario"]=$_POST["user"];
                header("Location:zona-vip.php");
            }
            else{
                header("Location:login.html");
            }
        }
        catch(Exception $e)
        {
            die("Error :" . $e->getMessage());
        }
        finally {    $conMySQL = null;     }
    ?>
    </body>
</html>