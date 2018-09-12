<?php 

class ControllerEnrutamiento {

	public function enrutamiento() {

		$ruta = $_GET["ruta"];

		if ($ruta == "home" ||
			$ruta == "nuevoCliente" ||
			$ruta == "cliente" ||
			$ruta == "nuevoCentro" ||
			$ruta == "modificarCentro" ||
			$ruta == "nuevoEquipo" ||
			$ruta == "modificarEquipo" ||
			$ruta == "subcategorias" ||
			$ruta == "productos" ||
			$ruta == "nuevoTaller" ||
			$ruta == "usuario" ||
			$ruta == "taller" ||
			$ruta == "bodega" ||
			$ruta == "salir") {

			include "views/modulos/".$ruta.".php";
		
		} else {
			include "views/modulos/error404.php";
		}


	}
}

?>