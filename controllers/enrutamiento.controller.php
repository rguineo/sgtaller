<?php 

class ControllerEnrutamiento {

	public function enrutamiento() {

		$ruta = $_GET["ruta"];

		if ($ruta == "home" ||
			$ruta == "nuevoCliente" ||
			$ruta == "clientes" ||
			$ruta == "nuevoCentro" ||
			$ruta == "centros" ||
			$ruta == "nuevoEquipo" ||
			$ruta == "equipos" ||
			$ruta == "subcategorias" ||
			$ruta == "productos" ||
			$ruta == "nuevoTaller" ||
			$ruta == "usuarios" ||
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