<?php

require_once "conexion.php";

Class mdlModelos{

    public function mdlMostrarModelos($tabla, $id){

        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE id_marca = :id");
        $sql -> bindParam(":id", $id, PDO::PARAM_INT);

        $sql -> execute();
        return $sql -> fetchAll();

    }

}


?>