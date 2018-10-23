<?php
require_once "conexion.php";

class mdlEquipo {

    private $_tabla;
    private $_datos = array();
    private $_resultado = "";
    private $_idEquipo;

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

    public function setIdEquipo($id){
        $this->_idEquipo = $id;
    }

    public function getIdEquipo(){
        return $this->_idEquipo;
    }

    public function mdlMostrarEquipo() {
        $tabla = $this->getTabla();
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();

    }

    public function mdlEliminarEquipo($tabla, $id){

        $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_equipo = :id");

        $sql->bindParam(":id", $id, PDO::PARAM_INT);

        if( $sql->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }
}

?>