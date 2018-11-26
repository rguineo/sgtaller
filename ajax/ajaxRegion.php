<?php
include_once ("../controllers/region.controller.php");
include_once ("../models/region.model.php");

Class ajaxRegion{
    public $_idPais;
    public $_idRegion;
    public $_nomRegion;

    public function ajaxNuevaRegion(){
        $datos = array ("idPais"=>$this->_idPais,
                        "nomRegion"=>$this->_nomRegion);
        $nuevaRegion = (new ctrRegion);
        $respuesta = $nuevaRegion -> ctrNuevaRegion($datos);
        echo $respuesta;
    }

    public function ajaxEditarRegion(){
        $id = $this->_idRegion;
        $buscar = (new ctrRegion);
        $respuesta = $buscar -> ctrBuscarRegion($id);
        echo json_encode($respuesta);
    }

    public function ajaxActualizarRegion(){
        $datos = array ("idRegion"=>$this->_idRegion,
                        "nomRegion"=>$this->_nomRegion,
                        "idPais"=>$this->_idPais);
        $actualizarRegion = (new ctrRegion);
        $respuesta = $actualizarRegion -> ctrActualizarRegion($datos);
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

if ( $tipoOperacion == "editarRegion"){
    $editarRegion = (new ajaxRegion);
    $editarRegion -> _idRegion = $_POST["id_region"];
    $editarRegion -> ajaxEditarRegion();
}

if ( $tipoOperacion == "actualizarRegion"){
    $actualizarRegion = (new ajaxRegion);
    $actualizarRegion -> _idRegion = $_POST["idregion"];
    $actualizarRegion -> _idPais = $_POST["EinputPais"];
    $actualizarRegion -> _nomRegion = $_POST["region"];
    $actualizarRegion -> ajaxActualizarRegion();    
}

?>