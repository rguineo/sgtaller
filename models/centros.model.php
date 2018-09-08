<?php
require_once "conexion.php";

class mdlCentros{

    private $_tabla;
    private $_datos = array ();
    private $_resultado = "";

<<<<<<< HEAD
    static public function mdlMostrarCentros($tabla) {
        
=======
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

    public function mdlMostrarCentros() {
        $tabla = $this->getTabla();
>>>>>>> f38524cee45b7478d60efccb2e9e880e79ff6100
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();

    }
}

?>      