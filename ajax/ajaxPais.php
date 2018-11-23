<?php
include_once ("../controllers/pais.controller.php");
include_once ("../models/pais.model.php");

Class ajaxPais{
    public $_idPais;
    public $_nombrePais;

    public function setIdPais($id){
        $this->_idPais = $id;
    }

    public function getIdPais(){
        return $this->_idPais;
    }

    public function setNomPais($nomPais){
        $this->_nombrePais = $nomPais;
    }

    public function getNomPais(){
        return $this->_nombrePais;
    }

    public function agregarPais(){
        $nombrePais = $this->_nombrePais;
        $agregarPais = (new ctrPais);
        $respuesta = $agregarPais -> ctrAgregarPais($nombrePais);
        echo $respuesta;
    }

    public function eliminarPais(){
        $id = $this->getIdPais();
        $eliminar = new ctrPais();
        $eliminar -> setIdPais($id);
        $respuesta = $eliminar -> ctrEliminarPais();
        echo $respuesta;
	}
}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "nuevoPais") {
    $NuevoPais = (new ajaxPais);
    $NuevoPais->_nombrePais = $_POST["pais"];
    $NuevoPais->agregarPais();
}

if ($tipoOperacion == "eliminarPais") {
    $eliminarPais = (new ajaxPais);
    $eliminarPais -> getIdPais($_POST["id"]);
    $eliminarPais -> eliminarPais();
}

?>