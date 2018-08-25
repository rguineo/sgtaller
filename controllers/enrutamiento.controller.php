<?php 

class ControllerEnrutamiento {

	public function enrutamiento() {

		$ruta = $_GET["ruta"];

		if ($ruta == "home" ||
			$ruta == "nuevoCliente" ||
			$ruta == "todosCliente" ||
			$ruta == "nuevoCentro" ||
			$ruta == "modificarCentro" ||
			$ruta == "nuevoEquipo" ||
			$ruta == "modificarEquipo" ||
			$ruta == "subcategorias" ||
			$ruta == "productos" ||
			$ruta == "nuevoTaller" ||
			$ruta == "salir") {

			include "views/modulos/".$ruta.".php";
		
		} else {
			include "views/modulos/error404.php";
		}


	}
}

?>