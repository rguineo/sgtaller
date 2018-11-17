<?php

Class ctrModelo{

    private $_idModelo;
    private $_Modelo;


    public function getIdModelo(){
        return $_idModelo;
    }
    
    public function setIdModelo($id){
        $this->_idModelo = $id;
    }

    public function getModelo(){
        return $_Modelo;
    }

    public function setModelo($modelo){
        $this->_Modelo = $modelo;
    }

    public function ctrMostrarModelo(){
        $tabla = "modelo";
        $modelo = (new mdlModelo);
        $respuesta = $modelo->mdlMostrarModelo($tabla);
        return $respuesta;
    }

    public function ctrMostrarModelos($id_marca){
        $tabla = "modelo";
        $modelos = (new mdlModelo);
        $respuesta = $modelos -> mdlMostrarModelos($tabla, $id_marca);
        return $respuesta;
    }
}


?>