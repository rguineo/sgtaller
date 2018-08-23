<?php

require "conexion.php";

class ModelEquipo {

    static public function mdlMostrartEquipo($tabla) {
        
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();

    }
}

?>