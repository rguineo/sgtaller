<?php

Class ctrEquipo{
    
    public function ctrMostrarEquipo(){
        $tabla = "equipo";
        $Tequipo = new mdlEquipo();
        $Tequipo->setTabla($tabla);
        $repuesta = $Tequipo->mdlMostrarEquipo();
        return $repuesta;
    }
}

?>