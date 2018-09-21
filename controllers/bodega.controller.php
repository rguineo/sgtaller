<?php

class ctrBodega{
    private $_datos = array();
    private $_idBodega;

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

    public function ctrTodoBodega(){
        $tabla = "bodega";
        $Tbodega = new mdlBodega();
        $Tbodega->setTabla($tabla);
        $respuesta = $Tbodega->mdlMostrarTbodega();
        return $respuesta;
    }
}

?>