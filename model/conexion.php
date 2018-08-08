<?php 

class Conexion {

	public function Conectar () {
        $basedato = "tienda2";

		$link = new PDO("mysql:host=localhost;dbname=$basedato", 
			"root",
			"",
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
		return $link;
	}
}
?>