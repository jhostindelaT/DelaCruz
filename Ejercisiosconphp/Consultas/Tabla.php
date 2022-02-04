<?php


require "conexion.php";


if($con->connect_errno)
{
    echo "Error de conexion de la base datos".$con->connect_error;
    exit();
}
$sql = "select * from Usuarios";

$resultado = $con->query($sql);


if (!empty($_REQUEST['si'])) {
  $o=$_REQUEST['si'];
    $si['so']=$o;
   
    $hola=$si['so'];
   
}
?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1 align="center">LISTADO DE MEDICOS</h1>
    <form action="" method="">
    <table width="70%" border="1px" align="center">

    <tr align="center">
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Edad</td>
        <td>Clave</td>
        <td>Eliminar</td>
    </tr>
    <?php 
        while($datos=$resultado->fetch_array()){
        ?>
            <tr>
                <td><?php echo $datos["Nombre"]?></td>
                <td><?php echo $datos["Apellido"]?></td>
                <td><?php echo $datos["Edad"]?></td>
                <td><?php echo $datos["Contrasena"]?></td>
                <td><a href="?si=<?php echo $datos["Nombre"]?>">Agregar</a></td>
            </tr>
            <?php   
        }

     ?>
    </table>
    </form>
<table>
    <tr align="center">
        <td>Nombre</td>
        <td>Apellido</td>
    </tr>

    <?php 
       
        ?>
            <tr>
                <td><?php echo $hola?></td>
                <td><?php echo $hola?></td>

            </tr>
            <?php   
        

     ?>
         
    
    </table>

</body>
</html>