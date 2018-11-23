<?php

Class ctrRegion{

    public function ctrNuevaRegion($datos){
        $tabla = "region";
        $nuevaRegion = (new mdlRegion);
        $respuesta = $nuevaRegion -> mdlNuevaRegion($tabla, $datos);
        return $respuesta;
    }

    public function ctrMostrarRegion(){
        $tabla = "region";
        $mostrarRegion = (new mdlRegion);
        $respuesta = $mostrarRegion -> mdlMostrarRegion($tabla);
        return $respuesta;
    }

}

?>