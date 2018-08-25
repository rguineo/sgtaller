<?php

require "conexion.php";

class ModelCentros {

    static public function mdlMostrartCentros($tabla) {
        
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();

    }
}

?>  