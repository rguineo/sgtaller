<?php

Class ctrPais{

    private $_idPais;
    private $_Pais;


    public function getIdPais(){
        return $_idPais;
    }
    
    public function setIdPais($id){
        $this->_idPais = $id;
    }

    public function getPais(){
        return $_Pais;
    }

    public function setPais($pais){
        $this->_Pais = $pais;
    }

    public function ctrAgregarPais($nomPais){
        $tabla = "pais";
        $pais = (new mdlPais);
        $respuesta = $pais->mdlNuevoPais($tabla, $nomPais);
        return $respuesta;
    }

    public function ctrMostrarPais(){
        $tabla = "pais";
        $pais = (new mdlPais);
        $respuesta = $pais->mdlMostrarPais($tabla);
        return $respuesta;
    }


}


?>