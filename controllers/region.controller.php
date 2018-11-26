<?php

Class ctrRegion{

    public function ctrNuevaRegion($datos){
        $tabla = "region";
        $nuevaRegion = (new mdlRegion);
        $respuesta = $nuevaRegion -> mdlNuevaRegion($tabla, $datos);
        return $respuesta;
    }

    public function ctrMostrarRegiones(){
        $tabla = "region";
        $mostrarRegion = (new mdlRegion);
        $respuesta = $mostrarRegion -> mdlMostrarRegiones($tabla);
        return $respuesta;
    }

    public function ctrBuscarRegion($id){
        $tabla = "region";
        $buscarRegion = (new mdlRegion);
        $respuesta = $buscarRegion-> mdlBuscarRegion($tabla, $id);
        return $respuesta;
    }

    public function ctrActualizarRegion($datos){
        $tabla = "region";
        $actualizarRegion = (new mdlRegion);
        $respuesta = $actualizarRegion -> mdlActualizarRegion($tabla, $datos);
        return $respuesta;
    }
}

?>