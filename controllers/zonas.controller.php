<?php

Class ControllerZonas{

    public function ctrMostrarPais(){
        $tabla = "pais";

        $mdlPais = new ModelZonas();
        $mdlPais->setTabla($tabla);
        $respuesta = $mdlPais->mdlMostrarPais();
        return $respuesta;
    }

}


?>