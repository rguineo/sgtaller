<?php
require_once "conexion.php";

class mdlBodega{

    private $_tabla;
    private $_datos = array();
    private $_resultado = "";
    private $_idBodega;

    public function setResultado($result){
        $this->_resultado = $result;
    }

    public function getResultado(){
        return $this->_resultado;
    }
    public function setTabla($tabla){
        $this->_tabla = $tabla;
    }

    public function getTabla(){
        return $this->_tabla;
    }

    public function setDatos($datos){
        $this->_datos = $datos;
    }

    public function getDatos(){
        return $this->_datos;
    }

    public function setIdCliente($id){
        $this->_idBodega = $id;
    }

    public function getIdCliente(){
        return $this->_idBodega;
    }

    public function mdlMostrarTbodega(){
        $tabla = $this->getTabla();
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();
    }

}
?>