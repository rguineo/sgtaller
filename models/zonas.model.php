<?php
require_once "conexion.php";

Class ModelZonas{
    private $_tabla;

    public function setTabla($table){
        $this->_tabla = $table;
    }

    public function getTabla(){
        return $this->_tabla;
    }

    public function mdlMostrarPais(){
        $table = $this->getTabla();
        $sql = Conexion::conectar()->prepare("SELECT * FROM $table");
        $sql -> execute();
        return $sql->fetchAll();
    }
}

?>