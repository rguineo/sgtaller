<?php
include_once ("../controllers/region.controller.php");
include_once ("../models/region.model.php");

Class ajaxRegion{
    public $_idPais;
    public $_nomRegion;

    public function ajaxNuevaRegion(){
        $datos = array ("idPais"=>$this->_idPais,
                        "nomRegion"=>$this->_nomRegion);
        $nuevaRegion = (new ctrRegion);
        $respuesta = $nuevaRegion -> ctrNuevaRegion($datos);
        echo $respuesta;
    }
}

$tipoOperacion = $_POST["tipoOperacion"];

if ( $tipoOperacion == "nuevaRegion"){
    $nuevaRegion = (new ajaxRegion);
    $nuevaRegion -> _idPais = $_POST["pais"];
    $nuevaRegion -> _nomRegion = $_POST["region"];
    $nuevaRegion -> ajaxNuevaRegion();
}

?>