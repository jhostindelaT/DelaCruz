<?php  


/**
 * 
 */
class conexion
{
	private $user="Jhostin200@";//usuario de la base de datos
    private $pass="jhostinsi";//Tu contraseña para entrar a la base de datos
	private $server="localhost";//EL nombre de tu host
	private $db="Usuarios";//Tu Base de datos
	private $charset = "UTF-8";
	private $conectarse="";
	
	function __construct()
	{

		$cadenaDeConexion = "mysql:host=".$this->server.";dbname=".$this->db;
	
	try {
		$this->connect = new PDO($cadenaDeConexion.$this->user ,$this->pass);
		
		$this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		$this->connect ='EROR AL CONEXTAR';

		echo "ERROR: ". $e->getMessage();
		
	

	}
	
}
}

  $conectarse = new conexion();


?>