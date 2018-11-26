<?php 

require_once "../controllers/ciudad.controller.php";
require_once "../models/ciudad.model.php";

Class ajaxCiudad {
    public $_idCiudad;
    public $_nomCiudad;
    public $_idRegion;

    public function ajaxBuscarCiudad(){
        $id = $this->_idCiudad;
        $buscarCiudad = (new ctrCiudad);
        $respuesta = $buscarCiudad -> ctrBuscarCiudad($id);
        echo json_encode($respuesta);
    }

    public function ajaxNuevaCiudad(){
        $datos = array( "nomCiudad"=>$this->_nomCiudad,
                        "idRegion"=>$this->_idRegion);
        $actualizar = (new ctrCiudad);
        $respuesta = $actualizar -> ctrNuevaCiudad($datos);
        echo $respuesta;
    }

    public function ajaxActualizar(){
        $datos = array("idCiudad"=>$this->_idCiudad,
                        "nomCiudad"=>$this->_nomCiudad,
                        "idRegion"=>$this->_idRegion);
        $actualizar = (new ctrCiudad);
        $respuesta = $actualizar -> ctrActualizarCiudad($datos);
        echo $respuesta;
    }

}

$tipoOperacion = $_POST["tipoOperacion"];

if ( $tipoOperacion == "nuevaCiudad"){
    $nuevaCiudad = (new ajaxCiudad);
    $nuevaCiudad -> _nomCiudad = $_POST["inputCiudad"];
    $nuevaCiudad -> _idRegion = $_POST["inputRegion"];
    $nuevaCiudad -> ajaxNuevaCiudad();
}

if ( $tipoOperacion == "mostrarCiudad"){
    $mostrarCiudad = (new ajaxCiudad);
    $mostrarCiudad -> _idCiudad = $_POST["id_ciudad"];
    $mostrarCiudad -> ajaxBuscarCiudad();
}

if ( $tipoOperacion == "actualizarCiudad"){
    $actualizarCiudad = (new ajaxCiudad);
    $actualizarCiudad -> _idCiudad = $_POST["idCiudad"];
    $actualizarCiudad -> _nomCiudad = $_POST["inputCiudad"];
    $actualizarCiudad -> _idRegion = $_POST["EinputRegion"];
    $actualizarCiudad -> ajaxActualizar();
}


?>