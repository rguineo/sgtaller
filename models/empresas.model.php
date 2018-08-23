<?php

require "conexion.php";

class ModelEmpresa {

    static public function mdlMostrartEmpresa($tabla) {
        
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();

    }
}

?>