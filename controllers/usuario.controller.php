<?php 

class ctrUsuario{
	private $_datos = array();
	private $_idUsuario;

	public function setDatos($datos){
        $this->_datos = $datos;
    }

    public function getDatos(){
        return $this->_datos;
	}
	
	public function setIdUsuario($id){
		$this->_idUsuario = $id;
	}

	public function getIdUsuario(){
		return $this->_idUsuario;
	}

	public function ctrMostrarUsuario() {
		$tabla = "usuarios";
		$Musuario = new mdlUsuario();
		$Musuario->setTabla($tabla);
		$respuesta = $Musuario->mdlMostrarUsuario();
		return $respuesta;
	}

	public function ctrEliminarUsuario(){
        $tabla = "usuarios";
        $id = $this->getIdUsuario();
        $delUsuario = (new mdlUsuario);
        $respuesta = $delUsuario->mdlEliminarUsuario($tabla, $id);
        return $respuesta;

    }

	// static public function ctrCrearUsuario($datos) {
	// 	$tabla = "usuarios";

	// 	list($ancho, $alto) = getimagesize($datos["avatar"]["tmp_name"]);	

	// 	$nuevoAncho = 1024;
	// 	$nuevoAlto = 768;

	// 	$directorio = "../views/dist/img/avatar";

	// 	if($datos["avatar"]["type"] == "image/jpeg"){

	// 		$rutaImagen = $directorio."/".md5($datos["avatar"]["tmp_name"]).".jpeg";

	// 		$origen = imagecreatefromjpeg($datos["avatar"]["tmp_name"]);						
	// 		$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

	// 		imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

	// 		imagejpeg($destino, $rutaImagen);

	// 	}

	// 	if($datos["avatar"]["type"] == "image/png"){

	// 		$rutaImagen = $directorio."/".md5($datos["avatar"]["name"]).".png";

	// 		$origen = imagecreatefrompng($datos["avatar"]["tmp_name"]);						

	// 		$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

	// 		imagealphablending($destino, FALSE);
	
	// 		imagesavealpha($destino, TRUE);

	// 		imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

	// 		imagepng($destino, $rutaImagen);

	// 	}


	// 	$respuesta = (new ModeloUsuario)->mdlCrearUsuario($tabla, $datos, $rutaImagen);

	// 	return $respuesta;

	// }

	// static public function ctrEliminarUsuario($id_admin, $ruta) {

	// 	$tabla = "usuarios";
		
	// 	if ( unlink($ruta) ) {
		
	// 		$respuesta = ModeloUsuario::mdlEliminarUsuario($tabla, $id_admin);	
		
	// 	}
		
	// 	return $respuesta;

	// }

	// static public function ctrEditarUsuario($id_admin) {
	// 	$tabla = "usuarios";
	// 	$respuesta = (new ModeloUsuario)->mdlEditarUsuario($tabla, $id_admin);

	// 	return $respuesta;
	// }

	// static public function ctrActualizarUsuario($datos) {
	// 	//Validamos si no viene imagen para actualizar solo la tabla
	// 	$tabla = "usuarios";

	// 	if ($datos["avatar"]["error"] == 4) {
	// 		$rutaImagen = null;

	// 	} 
	// 	// LA ACTUALIZACIÓN VIENE CON IMAGEN
	// 	else {
			
	// 		unlink("../".$datos["rutaActual"]);
			
	// 		list($ancho, $alto) = getimagesize($datos["avatar"]["tmp_name"]);	

	// 		$nuevoAncho = 1024;
	// 		$nuevoAlto = 768;

	// 		$directorio = "../views/dist/img/avatar";

	// 		if($datos["avatar"]["type"] == "image/jpeg"){

	// 			$rutaImagen = $directorio."/".md5($datos["avatar"]["tmp_name"]).".jpeg";

	// 			$origen = imagecreatefromjpeg($datos["avatar"]["tmp_name"]);						
	// 			$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

	// 			imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

	// 			imagejpeg($destino, $rutaImagen);

	// 		}

	// 		if($datos["avatar"]["type"] == "image/png"){

	// 			$rutaImagen = $directorio."/".md5($datos["avatar"]["name"]).".png";

	// 			$origen = imagecreatefrompng($datos["avatar"]["tmp_name"]);						

	// 			$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

	// 			imagealphablending($destino, FALSE);
		
	// 			imagesavealpha($destino, TRUE);

	// 			imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

	// 			imagepng($destino, $rutaImagen);

	// 		}
			
	// 	}

	// 	$respuesta = ModeloUsuario::mdlActualizarUsuario($tabla, $datos, $rutaImagen);

	// 	return $respuesta;

	// }

}
?>