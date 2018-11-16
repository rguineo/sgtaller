<?php
require_once "conexion.php";

Class mdlModelo{

    public function mdlMostrarModelo($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();
    }
}



?>