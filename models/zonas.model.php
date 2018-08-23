<?php
require_once "conexion.php";

Class ModelZonas{
    private $_tabla;
    private $_idPais;

    public function setTabla($table){
        $this->_tabla = $table;
    }

    public function getTabla(){
        return $this->_tabla;
    }

    public function setIdPais($id){
        $this->_idPais = $id;
    }

    public function getIdPais(){
        return $this->_idPais;
    }

    public function mdlMostrarPais(){
        $table = $this->getTabla();
        $sql = Conexion::conectar()->prepare("SELECT * FROM $table");
        $sql -> execute();
        return $sql->fetchAll();
    }

    public function mdlListarRegion(){
        $id = $this->getIdPais();
        $tabla = $this->getTabla();
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_pais=$id");
        $sql -> execute();
        return $sql->fetchAll();
    }


}

?>