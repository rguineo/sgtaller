<?php

Class crtProductos{


	public function ctrListarProductos(){
		$tabla = "stock";

		$respuesta = (new mdlProductos)->mdlListarProductos($tabla);
		return $respuesta;
	}

	public function ctrListarTodosProductos(){
		$tabla = "productos";
		$respuesta = (new mdlProductos)->mdlListarTodosProductos($tabla);
		return $respuesta;
	}

	public function ctrNuevoProducto($datos){
		$tabla = "productos";
		$respuesta = (new mdlProductos)->mdlNuevoProducto($tabla, $datos);
		return $respuesta;

	}

	public function ctrBuscarProducto($id){
		$tabla = "productos";
		$respuesta = (new mdlProductos)->mdlBuscarProducto($tabla, $id);
		return $respuesta;
	}

	public function ctrActualizarProducto($datos){
		$tabla = "productos";
		$respuesta = (new mdlProductos)->mdlActualizarProducto($tabla, $datos);
		return $respuesta;
	}

	public function ctrEliminaProducto($id){
		$tabla = "productos";
		$respuesta = (new mdlProductos)->mdlEliminarProducto($tabla, $id);
		return $respuesta;
	}
}

?>