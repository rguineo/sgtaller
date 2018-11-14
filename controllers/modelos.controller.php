<?php

Class ctrModelos{

    public function ctrMostrarModelos($id){
        $tabla = "modelo";
        $modelos = (new mdlModelos);
        $respuesta = $modelos -> mdlMostrarModelos($tabla, $id);
        return $respuesta;
    }

}

?>