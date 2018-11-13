<?php
require_once "conexion.php";

Class mdlMarca{

    public function mdlMostrarMarca($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();
    }
}



?>