<?php
require_once "conexion.php";

Class mdlStock{

    public function mdlBuscarStock($tabla, $id){
        $sql = (new Conexion)->conectar()->prepare("SELECT stock.id, stock.id_producto, stock.cantidad, stock.ncritico, productos.nombre, productos.detalle, productos.precio 
        FROM $tabla
        INNER JOIN productos
        ON stock.id_producto = productos.id
        WHERE stock.id_producto = $id");
        $sql -> execute();
        return ($sql->fetch());
    }

    public function mdlNuevoStock($tabla, $datos){
        $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() 
        VALUES (NULL, :idP, :stock, :ncritico, NULL, :idU)");

        $sql -> bindParam(":idP", $datos["idProducto"], PDO::PARAM_INT);
        $sql -> bindParam(":stock", $datos["stock"], PDO::PARAM_INT);
        $sql -> bindParam(":ncritico", $datos["nCritico"], PDO::PARAM_INT);
        $sql -> bindParam(":idU", $datos["nSession"], PDO::PARAM_STR);
        
        if ($sql -> execute()){
            return "ok";
        } else {
            return "error";
        }
    }

    public function mdlActualizarStock($tabla, $datos){
        $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET
        id_producto = :idP, cantidad= :stock, ncritico= :ncritico, id_usuario = :idU
        WHERE id = :idS");

        $sql -> bindParam(":idS", $datos["idStock"], PDO::PARAM_INT);
        $sql -> bindParam(":idP", $datos["idProducto"], PDO::PARAM_INT);
        $sql -> bindParam(":stock", $datos["stock"], PDO::PARAM_INT);
        $sql -> bindParam(":ncritico", $datos["nCritico"], PDO::PARAM_INT);
        $sql -> bindParam(":idU", $datos["nSession"], PDO::PARAM_STR);

        if ($sql -> execute()){
            return "ok";
        } else {
            return "error";
        }
    }

    public function mdlCargarStock($tabla, $id){
        $sql = (new Conexion)->conectar()->prepare("SELECT stock.id, stock.id_producto, stock.cantidad, stock.ncritico, productos.nombre, productos.detalle, productos.precio 
        FROM $tabla
        INNER JOIN productos
        ON stock.id_producto = productos.id
        WHERE stock.id = :idS");

        $sql -> bindParam(":idS", $id, PDO::PARAM_INT);
        $sql -> execute();
        return ($sql->fetch());

    }

    public function mdlEgresoStock($tabla, $id, $egreso, $idSession){
        $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET cantidad = :stock, id_usuario = :idU WHERE id = :idS");

        $sql -> bindParam(":idS", $id, PDO::PARAM_INT);
        $sql -> bindParam(":stock", $egreso, PDO::PARAM_INT);
        $sql -> bindParam(":idU", $idSession, PDO::PARAM_STR);
        
        if ($sql -> execute()){
            return "ok";
        } else {
            return "error";
        }
    }
}


?>