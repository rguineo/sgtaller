<?php

Class ctrCiudad{

    public function ctrNuevaCiudad($datos){
        $tabla = "ciudad";
        $buscarCiudades = (new mdlCiudad);
        $respuesta = $buscarCiudades -> mdlNuevaCiudad($tabla, $datos);
        return $respuesta;
    }
    public function ctrMostrarCiudades(){
        $tabla = "ciudad";
        $buscarCiudades = (new mdlCiudad);
        $respuesta = $buscarCiudades -> mdlBuscarCiudades($tabla);
        return $respuesta;
    }

    public function ctrBuscarCiudad($id){
        $tabla = "ciudad";
        $buscarCiudad = (new mdlCiudad);
        $respuesta = $buscarCiudad -> mdlBuscarCiudad($tabla, $id);
        return $respuesta;
    }

    public function ctrActualizarCiudad($datos){
        $tabla = "ciudad";
        $actualizar = (new mdlCiudad);
        $respuesta = $actualizar -> mdlActualizarCiudad($tabla, $datos);
        return $respuesta;
    }  

}

?>