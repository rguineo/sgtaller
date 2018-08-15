<?php 

require_once "conexion.php";

Class ModeloSlider {

	static public function listarSliderMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();

	}

}

?>