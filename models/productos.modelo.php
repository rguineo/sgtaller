<?php

require_once "conexion.php";

Class mdlProductos{

	public function mdlListarProductos($tabla){

		$sql = (new Conexion)->conectar()->prepare("SELECT stock.id, stock.cantidad, stock.ncritico, productos.nombre, productos.detalle, productos.precio 
			FROM $tabla
			INNER JOIN productos
			ON stock.id_producto = productos.id");
		$sql -> execute();
		return $sql -> fetchAll();
	}

	public function mdlListarTodosProductos($tabla){
		$sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}

	public function mdlValidarProducto($nombre, $tabla){
		$sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE nombre = :nombre");

		$sql -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$sql -> execute();

		if ($sql -> fetchAll()){
			return "error";
		} else {
			return "vacio";
		}
	}

	public function mdlNuevoProducto($tabla, $datos){
		$nombre = $datos["nombre"];

		$resp = $this->mdlValidarProducto($nombre, $tabla);

		if ($resp == "error"){
			return $resp;
		} else {
			$sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() 
			VALUES (NULL, :nombre, :detalle, :unidad, :barcode, :precio, NULL, :idU)");

			$sql->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$sql->bindParam(":detalle", $datos["detalle"], PDO::PARAM_STR);
			$sql->bindParam(":unidad", $datos["unidad"], PDO::PARAM_STR);
			$sql->bindParam(":precio", $datos["precio"], PDO::PARAM_INT);
			$sql->bindParam(":barcode", $datos["barcode"], PDO::PARAM_STR);
			$sql->bindParam(":idU", $datos["nSession"], PDO::PARAM_STR);

			if ($sql -> execute()){
				return "ok";
			} else {
				return "error";
			}

		}

	}

	public function mdlBuscarProducto($tabla, $id){
		$sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE id = $id");
		$sql -> execute();
		return ($sql -> fetch());
	}

	public function mdlActualizarProducto($tabla, $datos){
		$sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET
		nombre = :nombre, detalle = :detalle, umedida = :unidad, barcode = :barcode, precio = :precio, imagen = NULL, id_usuario = :idU
		WHERE id = :id");

		$sql->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$sql->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$sql->bindParam(":detalle", $datos["detalle"], PDO::PARAM_STR);
		$sql->bindParam(":unidad", $datos["unidad"], PDO::PARAM_STR);
		$sql->bindParam(":precio", $datos["precio"], PDO::PARAM_INT);
		$sql->bindParam(":barcode", $datos["barcode"], PDO::PARAM_STR);
		$sql->bindParam(":idU", $datos["nSession"], PDO::PARAM_INT);

		if ($sql -> execute()){
			return "ok";
		} else {
			return "error";
		}
		
	}

	public function mdlEliminarProducto($tabla, $id){
		$sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
		
		$sql->bindParam(":id", $id, PDO::PARAM_INT);
		
		if ($sql -> execute()){
			return "ok";
		} else {
			return "error";
		}
	}
}

?>