<?php
include_once ("../controllers/pais.controller.php");
include_once ("../models/pais.model.php");

Class Equipo{
    public $_idPais;
    public $_nombre_pais;

    public function setIdPais($id){
        $this->_idPais = $id;
    }

    public function getIdPais(){
        return $this->_idPais;
    }

    public function setNomPais($nomPais){
        $this->_nombre_pais = $$nomPais;
    }

    public function getNomPais(){
        return $this->_nombre_pais;
    }

    public function agregarPais(){
        $datos = array("nombre_pais"=>$this->nomPais);
        $agregarPais = (new ctrPais);
        $respuesta = $agregarPais -> ctrAgregarPais($datos);
        echo $respuesta;
    }

    public function eliminarPais(){
        $id = $this->getIdPais();
        $eliminar = new ctrPais();
        $eliminar -> setIdPais($id);
        $respuesta = $eliminar -> ctrEliminarPais();
        echo $respuesta;
		// $ruta = $this->avatar_admin;

		// $respuesta = ControllerUsuario::ctrEliminarUsuario($id_admin, $ruta);

		// echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "nuevoPais") {
    
    $NuevoPais = new Pais();
    $NuevoCliente->setNomPais($_POST["nombre_pais"]);
    $NuevoPais->GuardarPais();
}

if ($tipoOperacion == "eliminarPais") {
    $eliminarPais = new ajaxPais();
    $eliminarPais -> getIdPais($_POST["id"]);
    $eliminarPais -> eliminarPais();
}

?>