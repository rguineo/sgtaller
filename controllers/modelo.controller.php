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
        $respuesta = $pais->mdlMostrarModelo($tabla);
        return $respuesta;
    }


}


?>