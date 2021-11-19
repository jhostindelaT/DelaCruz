<?php

require 'conexion.php';
/* PARTE 2: SI SE ENVÍA EL FORMULARIO CAPTURAR LOS DATOS PARA ELIMINAR EL CLIENTE */

$id_cliente= $_POST["ID_Usuario"];


//Se almacena en una variable el id del registro a eliminar

//Preparar la consulta

$consul= "DELETE FROM Usuarios WHERE ID_Usuario= $id_cliente";

//Ejecutar la consulta

//redirigir nuevamente a la página para ver el resultado


if (mysqli_query($con, $consul)) {
    header("location: Tabla.php");
} else {
    echo "Error: " . $consul . "<br>" . mysqli_error($con);
}



?>