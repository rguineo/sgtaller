<?php
require_once "../controllers/marcas.controller.php";
require_once "../models/marcas.model.php";

Class ajaxMarca {
    public $_nMarca;

    public function ajaxNuevaMarca(){

        $nMarca = $this->_nMarca;
        $agregarMarca = (new ctrMarcas);
        $respuesta = $agregarMarca->ctrNuevaMarca($nMarca);
        return $respuesta;
    }
}

$tipoOperacion = $_POST["tipoOperacion"];

if ( $tipoOperacion == "nuevaMarca"){
    $nuevaMarca = (new ajaxMarca);
    $nuevaMarca -> _nMarca = $_POST["marca"];
    $nuevaMarca -> ajaxNuevaMarca();
}

?>