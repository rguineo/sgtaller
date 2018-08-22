<?php

Class ControllerPais{

    public function ctrMostrarPais(){
        $tabla = "pais";

        $respuesta = new ModelZonas();
        $respuesta -> setTabla($tabla);
        $respuesta -> mdlMostrarPais();

        return $respuesta;
    }


}


?>