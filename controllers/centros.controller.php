<?php

Class centrosCtr{

    public function ctrMostrarCentros(){
        $tabla = "centros";

        $repuesta = ModelEmpresa::mdlMostrarCentros($tabla);

        return $repuesta;
    }
}

?>