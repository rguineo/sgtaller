<?php

Class ctrTerrenos{

    public function ctrGuardarTerreno($datos){
        $tabla = "terreno";
        $nuevoTerreno = (new mdlTerrenos);
        $respuesta = $nuevoTerreno -> mdlGuardarTerreno($tabla, $datos);
        return $respuesta;
    }

    public function mostrarTerrenos(){
        $tabla = "terreno";

        $mostrarTerreno = (new mdlTerrenos);
        $respuesta = $mostrarTerreno->mdlMostrarTerrenos($tabla);
        return $respuesta;

    }

    public function ctrBuscarterreno($idTerreno){
        $tabla = "terreno";
        $buscarTerreno = (new mdlTerrenos);
        $respuesta = $buscarTerreno -> mdlBuscarTerreno($tabla, $idTerreno);
        return $respuesta;
    }

    public function ctrActualizarTerreno($datos){
        $tabla = "terreno";
        $buscarTerreno = (new mdlTerrenos);
        $respuesta = $buscarTerreno -> mdlActualizarTerreno($tabla, $datos);
        return $respuesta;
    }
}

?>