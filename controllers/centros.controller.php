<?php

Class ctrCentros {
    private $_datos = array();
    private $_idCentro;

    public function setDatos($datos){
        $this->_datos = $datos;
    }

    public function getDatos(){
        return $this->_datos;
    }

    public function setIdCentro($id){
        $this->_idCentro = $id; 
    }

    public function getIdCentro(){
        return $this->_idCentro;
    }

    public function ctrMostrarCentros(){
        $tabla = "centros";
        $Tcentro = (new mdlCentros);
        // $Tcentro->setTabla($tabla);
        $repuesta = $Tcentro->mdlMostrarCentros($tabla);
        return $repuesta;
    }

    public function ctrGuardarCentro(){
        $tabla = "centros";
        $datos = $this->getDatos();
        $newCentro = (new mdlCentros);
        $respuesta = $newCentro->mdlGuardarCentro($tabla, $datos);
        return $respuesta;
    }

    public function ctrEliminarCentro(){
        $tabla = "centros";
        $id = $this->getIdCentro();
        $delCentro = (new mdlCentros);
        $respuesta = $delCentro->mdlEliminarCentro($tabla, $id);
        return $respuesta;

    }

    public function ctrEditarCentro(){
        $tabla = "centros";
        $id = $this->getIdCentro();
        $delCentro = (new mdlCentros);
        $respuesta = $delCentro->mdlEditarCentro($tabla, $id);
        return $respuesta;

    }


}

?>