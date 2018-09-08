<?php

Class centrosCtr{

    public function ctrMostrarCentros(){
        $tabla = "centros";

        $repuesta = ModelCentros::mdlMostrarCentros($tabla);

        return $repuesta;
    }
}

?>