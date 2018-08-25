<?php

Class ControllerZonas{
    private $_idPais;

    public function ctrMostrarPais(){
        $tabla = "pais";

        $mdlPais = new ModelZonas();
        $mdlPais->setTabla($tabla);
        $respuesta = $mdlPais->mdlMostrarPais();
        return $respuesta;
    }


    public function ctrListarRegion(){
        $tabla = "region";
        $id = $this->getIdPais();
        $region = new ModelZonas();
        $region -> setIdPais($id);
        $region -> setTabla($tabla);
        $respuesta = $region -> mdlListarRegion();
        return $respuesta; 
    }

    public function setIdPais($id){
        $this->_idPais = $id;
    }

    public function getIdPais(){
        return $this->_idPais;
    }

}


?>