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
        $id = $this->_idPais;
        $eliminar = new ctrPais();
        $respuesta = $eliminar -> ctrEliminarPais($id);
        echo $respuesta;
    }
    
    public function editarPais(){
        $id = $this->_idPais;
        $editar = (new ctrPais);
        $respuesta = $editar -> ctrBuscarPais($id);
        echo json_encode($respuesta);
    }

    public function actualizarPais(){
        $datos = array ("idPais"=>$this->_idPais,
                        "nombrePais"=>$this->_nombrePais);
        $actualiza = (new ctrPais);
        $respuesta = $actualiza -> ctrActualizaPais($datos);
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
    $eliminarPais -> _idPais = $_POST["id"];
    $eliminarPais -> eliminarPais();
}

if ( $tipoOperacion == "editarPais"){
    $editarPais = (new ajaxPais);
    $editarPais -> _idPais = $_POST["id_pais"];
    $editarPais -> editarPais();
}

if ( $tipoOperacion == "actualizarPais"){
    $actualizarPais = (new ajaxPais);
    $actualizarPais ->_idPais = $_POST["idPais"];
    $actualizarPais ->_nombrePais = $_POST["Epais"];
    $actualizarPais -> actualizarPais();
}

?>