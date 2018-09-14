<?php

Class ctrCentros {
    private $_datos = array();

    public function setDatos($datos){
        $this->_datos = $datos;
    }

    public function getDatos(){
        return $this->_datos;
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

}

?>