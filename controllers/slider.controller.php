<?php 

Class ControllerSlider {
	
	public function listarSliderCtr() {
		$tabla = "slider";
		$respuesta = ModeloSlider::listarSliderMdl($tabla);

		return $respuesta;
	}
}

?>