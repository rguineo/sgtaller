<?php

class ctrTaller{
    private $_datos = array();
    private $_idTaller;

    public function setDatos($datos){
        $this->_datos = $datos;
    }

    public function getDatos(){
        return $this->_datos;
    }

    public function setIdCliente($id){
        $this->_idTaller = $id;
    }

    public function getIdCliente(){
        return $this->_idTaller;
    }

    public function ctrTodoTaller(){
        $tabla = "taller";
        $Ttaller = new mdlTaller();
        $Ttaller->setTabla($tabla);
        $respuesta = $Ttaller->mdlMostrarTtaller();
        return $respuesta;
    }
}

?>