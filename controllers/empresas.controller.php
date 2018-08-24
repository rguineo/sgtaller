<?php

Class empresasCtr{

    public function ctrMostrarEmpresas(){
        $tabla = "empresa";

        $repuesta = ModelEmpresa::mdlMostrarEmpresa($tabla);

        return $repuesta;
    }
}

?>