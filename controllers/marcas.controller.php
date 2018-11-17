<?php

Class ctrMarcas{

    private $_idMarca;
    private $_Marca;


    public function getIdMarca(){
        return $_idMarca;
    }
    
    public function setIdMarca($id){
        $this->_idMarca = $id;
    }

    public function getMarca(){
        return $_Marca;
    }

    public function setMarca($marca){
        $this->_Marca = $marca;
    }

    public function ctrMostrarMarcas(){
        $tabla = "marca";
        $marca = (new mdlMarca);
        $respuesta = $marca->mdlMostrarMarca($tabla);
        return $respuesta;
    }

    public function ctrNuevaMarca($nMarca){
        $tabla = "marca";
        $nuevaMarca = (new mdlMarca);
        $respuesta = $nuevaMarca -> mdlNuevaMarca($tabla, $nMarca);
        echo $respuesta;
    }
}


?>