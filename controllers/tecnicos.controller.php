<?php

Class ctrTecnicos{

    public function ctrTodosTecnicos(){
        $tabla = "tecnicos";
        $todosTecnicos = (new mdlTecnicos);
        $respuesta = $todosTecnicos -> mdlTodosTecnicos($tabla);
        return $respuesta;
    }

    public function ctrNuevoTecnico($datos){
        $tabla = "tecnicos";
        $nuevoTecnico = (new mdlTecnicos);
        $respuesta = $nuevoTecnico->mdlNuevoTecnico($tabla, $datos);
        return $respuesta;
    }
    
    public function ctrBuscarTecnico($id){
        $tabla = "tecnicos";
        $nuevoTecnico = (new mdlTecnicos);
        $respuesta = $nuevoTecnico->mdlBuscarTecnico($tabla, $id);
        return $respuesta;
    }

    public function ctrAactualizarTecnico($datos){
        $tabla = "tecnicos";
        $actualizartecnico = (new mdlTecnicos);
        $respuesta = $actualizartecnico -> mdlAactualizarTecnico($tabla, $datos);
        return $respuesta;
    }

    public function ctrEliminarTecnico($id){
        $tabla = "tecnicos";
        $eliminarTec = (new mdlTecnicos);
        $respuesta = $eliminarTec -> mdlEliminarTecnico($tabla, $id);
        return $respuesta;
    }

}

?>