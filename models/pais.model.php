<?php
require_once "conexion.php";

Class mdlPais{

    public function mdlMostrarPais($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();
    }
}



?>