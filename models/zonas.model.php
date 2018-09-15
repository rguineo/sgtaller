<?php
require_once "conexion.php";

Class ModelZonas{
    private $_tabla;
    private $_idPais;
    private $_idRegion;
    private $_idCiudad;

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

    public function setIdRegion($id){
        $this->_idRegion = $id;
    }

    public function getIdRegion(){
        return $this->_idRegion;
    }

    public function setIdCiudad($id){
        $this->_idCiudad = $id;
    }

    public function getIdCiudad(){
        return $this->_idCiudad;
    }

    public function mdlMostrarPais(){
        $table = $this->getTabla();
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $table");
        $sql -> execute();
        return $sql->fetchAll();
    }

    public function mdlListarRegion(){
        $id = $this->getIdPais();
        $tabla = $this->getTabla();
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE id_pais = :id");
        $sql->bindParam(":id", $id, PDO::PARAM_INT);
        $sql -> execute();
        return $sql->fetchAll();
    }
    public function mdlListarCiudades(){
        $id = $this->getIdRegion();
        $tabla = $this->getTabla();
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE id_region = :id");
        $sql->bindParam(":id", $id, PDO::PARAM_INT);
        $sql -> execute();
        return $sql->fetchAll();
    }
  
    public function mdlListarComunas(){
        $id = $this->getIdCiudad();
        $tabla = $this->getTabla();
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE id_ciudad = :id");
        $sql->bindParam(":id", $id, PDO::PARAM_INT);
        $sql -> execute();
        return $sql->fetchAll();
    }
}

?>