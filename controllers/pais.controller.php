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

    public function ctrNuevoPais(){
        $tabla = "pais";
        $datas = $this->getDatos();
        $pais = new mdlPais();
        $pais->setDatos($datas);
        $pais->setTabla($tabla);
        $respuesta = $pais->mdlNuevoPais();
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