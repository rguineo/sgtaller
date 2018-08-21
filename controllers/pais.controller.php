<?php

Class ControllerPais{


    public function MostrarPais(){
        $tabla = "pais";

        $respuesta = new ModelPais();
        $respuesta->setTabla($tabla);
        $respuesta->mdlMostrarPais();
        return $respuesta;
    }


}


?>