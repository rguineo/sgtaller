<?php

Class equipoCtr{

    public function ctrMostrarEquipo(){
        $tabla = "equipo";

        $repuesta = ModelEmpresa::mdlMostrarEquipo($tabla);

        return $repuesta;
    }
}

?>