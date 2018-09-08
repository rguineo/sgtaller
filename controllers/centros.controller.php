<?php

Class ctrCentros {

    public function ctrMostrarCentros(){
        $tabla = "centros";
        $Tcentro = (new mdlCentros);
        // $Tcentro = setTabla($tabla);
        $repuesta = $Tcentro->mdlMostrarCentros($tabla);
        return $repuesta;
    }
}

?>