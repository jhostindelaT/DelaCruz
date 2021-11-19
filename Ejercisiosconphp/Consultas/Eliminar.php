<?php
include "conexion.php";
if (!empty($_POST)) {
    $IDEliminar= $_POST["Id_UsuarioEliminar"];
    $ConsultaEliminar="  DELETE FROM Usuarios WHERE ID_Usuario=$IDEliminar";
    $eliminar= mysqli_query($con,$ConsultaEliminar);

    if ($eliminar) {
        header("location: Tabla.php");
    }
    else {
        echo "ERROR AL ELIMINAR";
    }

}


require 'conexion.php';
if(empty($_REQUEST['id']))
{
    header("location: Tabla.php");
}
{


$IDUsuario= $_REQUEST['id'];
$BuscarCLiente="SELECT * FROM `Usuarios` WHERE $IDUsuario";

$query = mysqli_query($con,$BuscarCLiente);

$resultados=mysqli_num_rows($query);

if($resultados>0){
    while ($Datos=mysqli_fetch_array($query)) {
        $nombre=$Datos["Nombre"];
        $ID_Usuario=$Datos["ID_Usuario"];
    }
   
    $DatosEliminar =  "<h3>seguro que quieres eliminar a $nombre con el ID numero$ID_Usuario </h3>" ;
}
else{
    header("location: Tabla.php");      
}
 

}
/* PARTE 2: SI SE ENVÍA EL FORMULARIO CAPTURAR LOS DATOS PARA ELIMINAR EL CLIENTE */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
</head>
<body>
     <div class="elimnarr">
         <h1>Seguro que quieres eliminar</h1>
         <?php echo $DatosEliminar?>
        
         <form method="POST" action="">
             <input type="hidden" name="Id_UsuarioEliminar" value="<?php echo $ID_Usuario?>">
             <a href="Tabla.php">Canselar</a>
             <input type="submit" value="Aceptar">
         </form>
     </div>
    
</body>
</html>




