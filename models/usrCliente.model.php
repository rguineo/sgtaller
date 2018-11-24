<?php

require_once "conexion.php";

Class mdlUsrCliente{

    public function mdlMostrarUsrCliente($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT $tabla.id_usrCliente, $tabla.nomCliente, 
        $tabla.apeCliente, $tabla.usrCliente, $tabla.estado, empresa.razon_social
        FROM $tabla
        INNER JOIN empresa
        ON $tabla.id_empresa = empresa.id_empresa");

        $sql -> execute();
        return $sql->fetchAll();
    }

    public function mdlNuevoUsrCliente($tabla, $datos){
        $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla 
        VALUES (NULL, :nombre, :apellido, :usuario, :clave, 1, :idEmpresa)");
        
        $sql->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $sql->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
        $sql->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $sql->bindParam(":clave", $datos["pass"], PDO::PARAM_STR);
        $sql->bindParam(":idEmpresa", $datos["idEmpresa"], PDO::PARAM_INT);

        if ( $sql -> execute() ){
            return "ok";
        } else {
            return "error";
        }
    }

    public function mdlEncender($tabla, $id){
        $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET estado = 1 WHERE id_usrCliente = $id");
        if ( $sql -> execute() ){
            return "ok";
        } else {
            return "error"; 
        }
    }

    public function mdlApagar($tabla, $id){
        $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET estado = 0 WHERE id_usrCliente = $id");
        if ( $sql -> execute() ){
            return "ok";
        } else {
            return "error"; 
        }
    }

    public function mdlBuscarUsr($tabla, $id){
        $sql = (new Conexion)->conectar()->prepare("SELECT $tabla.id_usrCliente, $tabla.nomCliente, 
        $tabla.apeCliente, $tabla.usrCliente, $tabla.estado,  $tabla.id_empresa, empresa.razon_social
        FROM $tabla
        INNER JOIN empresa
        ON $tabla.id_empresa = empresa.id_empresa
        WHERE id_usrCliente = $id");
        $sql -> execute();
        return $sql -> fetch();
    }

    public function mdlActualizarUsrCliente($tabla, $datos){
        $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla 
        SET nomCliente = :nombre, apeCliente = :apellido, usrCliente = :usuario, pasCliente = :clave, 
        id_empresa = :idEmpresa
        WHERE id_usrCliente = :id ");

        $sql->bindParam(":id", $datos["idUsrCliente"], PDO::PARAM_INT);
        $sql->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $sql->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
        $sql->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $sql->bindParam(":clave", $datos["pass"], PDO::PARAM_STR);
        $sql->bindParam(":idEmpresa", $datos["idEmpresa"], PDO::PARAM_INT);

        if ( $sql -> execute() ){
            return "ok";
        } else {
            return "error";
        }
    }

    public function mdlEliminarUsr($tabla, $id){
        $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_usrCliente = $id");
        
        if ( $sql -> execute() ) {
            return "ok";
        } else {
            return "error";
        }
        
    }
}
?>