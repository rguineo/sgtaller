<?php

Class ctrStock{

    public function ctrBuscarStock($id){
        $tabla = "stock";
        $respuesta = (new mdlStock)->mdlBuscarStock($tabla, $id);
        return $respuesta;
    }

    public function ctrNuevoStock($datos){
        $tabla = "stock";
        $respuesta = (new mdlStock)->mdlNuevoStock($tabla, $datos);
        return $respuesta;
    }

    public function ctrActualizarStock($datos){
        $tabla = "stock";
        $respuesta = (new mdlStock)->mdlActualizarStock($tabla, $datos);
        return $respuesta;
    }

    public function ctrCargarStock($id){
        $tabla = "stock";
        $respuesta = (new mdlStock)->mdlCargarStock($tabla, $id);
        return $respuesta;
    }

    public function ctrEgresoStock($id, $egreso, $idSession){
        $tabla = "stock";
        $respuesta = (new mdlStock)->mdlEgresoStock($tabla, $id, $egreso, $idSession);
        return $respuesta;
    }
}

?>