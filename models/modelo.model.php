<?php
require_once "conexion.php";

Class mdlModelo{

    public function mdlMostrarModelo($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT modelo.id_modelo, modelo.modelo, marca.marca
        FROM $tabla 
        INNER JOIN marca
        ON modelo.id_marca = marca.id_marca");
        $sql -> execute();
        return $sql->fetchAll();
    }

    public function mdlMostrarModelos($tabla, $id){

        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE id_marca = :id");
        $sql -> bindParam(":id", $id, PDO::PARAM_INT);

        $sql -> execute();
        return $sql -> fetchAll();

    }
}



?>