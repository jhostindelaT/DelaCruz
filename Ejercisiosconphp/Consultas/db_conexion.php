<?php


  /*
  
  --/Algo que recomiendo personalmente que a la hora de estar trabajando con mysql instalar phpmyadmin

  --la version que estoy utilizando actualmente de php la version 7.4
  */
    $user="jhostinsi";//usuario de la base de datos
    $pass="Jhostin2004@";//Tu contraseña para entrar a la base de datos
    $server="localhost";//EL nombre de tu host
    $db="Usuarios";//Tu Base de datos
    $con= new mysqli($server,$user,$pass,$db);//la linea de conexion con la base de datos

    $tabla="Usuarios";

    //esto solamente es un (if) que nos muestra si la conexion se realizo con exito o no
   



?>