<?php
require_once "conexion.php";

Class mdlTecnicos{

    public function mdlTodosTecnicos($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();
    }

    public function mdlNuevoTecnico($tabla, $datos){
        $nomTec = ucfirst($datos["nomTecnico"]);
        $emlTec = strtolower($datos["emlTecnico"]);
    
        $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla VALUES (NULL, :nombre, NULL, :email)");

        $sql->bindParam(":nombre", $nomTec, PDO::PARAM_STR);
        $sql->bindParam(":email", $emlTec, PDO::PARAM_STR);

        if ( $sql->execute() ){
            return "ok";
        } else {
            return "error";
        }
    }

    public function mdlBuscarTecnico($tabla, $id){
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE id_tecnico = :id");
        $sql->bindParam(":id", $id, PDO::PARAM_INT);
        $sql -> execute();
        return $sql->fetch();
    }

    public function mdlAactualizarTecnico($tabla, $datos){
        $nomTec = ucfirst($datos["nomTecnico"]);
        $emlTec = strtolower($datos["emlTecnico"]);
        
        $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET
        nomTecnico = :nom, email = :eml WHERE id_tecnico = :id");

        $sql->bindParam(":id", $datos["idTecnico"], PDO::PARAM_INT);
        $sql->bindParam(":nom",  $nomTec, PDO::PARAM_STR);
        $sql->bindParam(":eml", $emlTec, PDO::PARAM_STR);

        if ( $sql->execute() ){
            return "ok";
        } else {
            return "error";
        }
    }

    public function mdlEliminarTecnico($tabla, $id){
        $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_tecnico = :id");

        $sql->bindParam(":id", $id, PDO::PARAM_INT);
        if ( $sql -> execute()){
            return "ok";
        } else {
            return "error";
        }
    }

}
?>