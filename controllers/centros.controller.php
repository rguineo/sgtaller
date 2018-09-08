<?php

Class ctrCentros{
    private $_datos = array();

    public function setDatos($datos){
        $this->_datos = $datos;
    }

<<<<<<< HEAD
        $repuesta = ModelCentros::mdlMostrarCentros($tabla);
=======
    public function getDatos(){
        return $this->_datos;
    }
>>>>>>> f38524cee45b7478d60efccb2e9e880e79ff6100

    public function ctrMostrarCentros(){
        $tabla = "centros";
        $Tcentro = new mdlCentros();
        $Tcentro = setTabla($tabla);
        $repuesta = $Tcentro->mdlMostrarCentros();
        return $repuesta;
    }
}

?>