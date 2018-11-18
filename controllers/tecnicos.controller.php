<?php

Class ctrTecnicos{

    public function ctrTodosTecnicos(){
        $tabla = "tecnicos";
        $todosTecnicos = (new mdlTecnicos);
        $respuesta = $todosTecnicos -> mdlTodosTecnicos($tabla);
        return $respuesta;
    }
}

?>