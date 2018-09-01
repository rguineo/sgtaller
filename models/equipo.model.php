<?php
require_once "conexion.php";

class mdlEquipo {

    private $_tabla;

    public function setTabla($tabla){
        $this->_tabla = $tabla;
    }

    public function getTabla(){
        return $this->_tabla;
    }

    public function mdlMostrarEquipo() {
        $tabla = $this->getTabla();
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();

    }
}

?>