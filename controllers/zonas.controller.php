<?php

Class ControllerZonas{
    private $_idPais;
    private $_idRegion;
    private $_idCiudad;
    

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

    public function ctrListarCiudades(){
        $tabla = "ciudad";
        $id = $this->getIdRegion();
        $ciudad = new ModelZonas();
        $ciudad -> setIdRegion($id);
        $ciudad -> setTabla($tabla);
        $respuesta = $ciudad -> mdlListarCiudades();
        return $respuesta; 
    }

    public function ctrListarComunas(){
        $tabla = "comuna";
        $id = $this->getIdCiudad();
        $ciudad = new ModelZonas();
        $ciudad -> setIdCiudad($id);
        $ciudad -> setTabla($tabla);
        $respuesta = $ciudad -> mdlListarComunas();
        return $respuesta; 
    }
}


?>