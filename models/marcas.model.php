<?php
require_once "conexion.php";

Class mdlMarca{

    public function mdlMostrarMarca($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();
    }

    public function mdlNuevaMarca($tabla, $nMarca){
        $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla 
        VALUES (NULL, :marca)");

        $sql->bindParam(":marca", $nMarca, PDO::PARAM_STR);

        if ( $sql -> execute() ){
            return "ok";
        } else {
            return "error";
        }
    }
}

?>