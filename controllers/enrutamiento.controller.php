<?php 

class ControllerEnrutamiento {

	public function enrutamiento() {

		$ruta = $_GET["ruta"];

		if ($ruta == "home" ||
			$ruta == "nuevoCliente" ||
			$ruta == "cliente" ||
			$ruta == "nuevoCentro" ||
			$ruta == "centros" ||
			$ruta == "nuevoEquipo" ||
			$ruta == "ingresoTaller" ||
			$ruta == "terrenos" ||
			$ruta == "equipos" ||
			$ruta == "marca" ||
			$ruta == "stock" ||
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