<?php
require_once "conexion.php";

Class ModelZonas{
    private $_tabla;
   
    public function __construct(){

    }

    public function getTabla(){
        return $this->_tabla;
    }    

    public function setTabla($tabla){
        $this->_tabla = $tabla;
    }

    public function mdlMostrarPais(){
        $sql = Conexion::conectar()->prepare("SELECT * FROM '.$this->getTabla().'");
        $sql -> execute();
        return $sql->fetchAll();
    }
}

?>