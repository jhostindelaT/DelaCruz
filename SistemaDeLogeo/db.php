<?php


$user="jhostinsi";
$pass="Jhostin2004@";
$server="localhost";
$db="Usuarios";
$con= new mysqli($server,$user,$pass,$db);

if($con-> connect_errno){

    die('la conexxion ha fallado'. $con-> connect_errno);

}





?>


