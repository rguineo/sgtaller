<?php 

class Conexion {

	public function Conectar () {

		$link = new PDO("mysql:host=localhost;dbname=sgtaller", 
			"root",
			"",
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);

		return $link;

	}

}


?>