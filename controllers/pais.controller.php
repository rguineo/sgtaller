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

    public function ctrEliminarPais($id){
        $tabla = "pais";
        $pais = (new mdlPais);
        $respuesta = $pais->mdlEliminarPais($tabla, $id);
        return $respuesta;
    }

    public function ctrBuscarPais($id){
        $tabla = "pais";
        $pais = (new mdlPais);
        $respuesta = $pais -> ctrBuscarPais($tabla, $id);
        return $respuesta;
    }

    public function ctrActualizaPais($datos){
        $tabla = "pais";
        $pais = (new mdlPais);
        $respuesta = $pais -> mdlActualizaPais($tabla, $datos);
        return $respuesta;
    }

}


?>