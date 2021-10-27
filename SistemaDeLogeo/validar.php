<?php

$usuario=$_POST['usu'];
$contrase=$_POST['contra'];

seesion_start();
$_SERVER['usu']=$usuario;

$user="jhostinsi";
$pass="Jhostin2004@";
$server="localhost";
$db="Usuarios";

$con= new mysqli($server,$user,$pass,$db);

$consulta="SELECT*FROM Usuarios where Nombre='$usuario'and Contraseña='$contrase'";

$resultado=mysqli_query($con,$consulta);



if($filas){

    header("location:home.php");

}else{
?>
<?php

include "index.php";
?>
<h1 >herro<h1>
    <?php
}

mysqli_free_result($resultado);
mysql_close($con);

?>