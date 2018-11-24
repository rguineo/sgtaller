<?php
require_once "../controllers/usrCliente.controller.php";
require_once "../models/usrCliente.model.php";


Class ajaxUsrCliente{
    public $_idUsrCliente;
    public $_usrCliente;
    public $_nomCliente;
    public $_apeCliente;
    public $_passCliente;
    public $_empresaCliente;

    public function ajaxNuevoUsrCliente(){
        $datos = array( "usuario"=>$this->_usrCliente,
                        "nombre"=>$this->_nomCliente,
                        "apellido"=>$this->_apeCliente,
                        "pass"=>$this->_passCliente,
                        "idEmpresa"=>$this->_empresaCliente );
        $nuevoUsr = (new ctrUsrCliente);
        $respuesta = $nuevoUsr -> ctrNuevoUsrCliente($datos);
        echo $respuesta;
    }

    public function ajaxEncenderUsr(){
        $id = $this->_idUsrCliente;
        $encender = (new ctrUsrCliente);
        $respuesta = $encender -> ctrEncender($id);
        return $respuesta;
    }

    public function ajaxApagarUsr(){
        $id = $this->_idUsrCliente;
        $encender = (new ctrUsrCliente);
        $respuesta = $encender -> ctrApagar($id);
        return $respuesta;
    }

    public function ajaxBuscarUsr(){
        $id = $this->_idUsrCliente;
        $buscarUsr = (new ctrUsrCliente);
        $respuesta = $buscarUsr -> ctrBuscarUsr($id);
        echo json_encode($respuesta);
    }

    public function ajaxActualizarUsrCliente(){
        $datos = array( "idUsrCliente"=>$this->_idUsrCliente,
                        "usuario"=>$this->_usrCliente,
                        "nombre"=>$this->_nomCliente,
                        "apellido"=>$this->_apeCliente,
                        "pass"=>$this->_passCliente,
                        "idEmpresa"=>$this->_empresaCliente );
        $nuevoUsr = (new ctrUsrCliente);
        $respuesta = $nuevoUsr -> ctrActualizarUsrCliente($datos);
        echo $respuesta;
    }

    public function ajaxEliminarUsr(){
        $id = $this->_idUsrCliente;
        $eliminar = (new ctrUsrCliente);
        $respuesta = $eliminar -> ctrEliminarUsr($id);
        echo $respuesta;
    }

}

$tipoOperacion = $_POST["tipoOperacion"];

if ( $tipoOperacion == "nuevoUsrCliente"){
    $nuevoUsrCliente = (new ajaxUsrCliente);
    $nuevoUsrCliente -> _usrCliente = $_POST["usrCliente"];
    $nuevoUsrCliente -> _nomCliente = $_POST["nomUsrCliente"];
    $nuevoUsrCliente -> _apeCliente = $_POST["apeUsrCliente"];
    $nuevoUsrCliente -> _passCliente = $_POST["passUsrCliente"];
    $nuevoUsrCliente -> _empresaCliente = $_POST["empresaUsrCliente"];
    $nuevoUsrCliente -> ajaxNuevoUsrCliente();
}

if ( $tipoOperacion == "encenderUsr"){
    $encenderUsr = (new ajaxUsrCliente);
    $encenderUsr -> _idUsrCliente = $_POST["id_usrCliente"];
    $encenderUsr -> ajaxEncenderUsr();
}

if ( $tipoOperacion == "apagarUsr"){
    $encenderUsr = (new ajaxUsrCliente);
    $encenderUsr -> _idUsrCliente = $_POST["id_usrCliente"];
    $encenderUsr -> ajaxApagarUsr();
}

if ( $tipoOperacion == "editarUsrCliente"){
    $editarUsr = (new ajaxUsrCliente);
    $editarUsr -> _idUsrCliente = $_POST["id_usrCliente"];
    $editarUsr -> ajaxBuscarUsr();
}

if ( $tipoOperacion == "actualizarUsrCliente"){
    $actualizarUsr = (new ajaxUsrCliente);
    $actualizarUsr -> _idUsrCliente = $_POST["idUsrCliente"];
    $actualizarUsr -> _usrCliente = $_POST["usrCliente"];
    $actualizarUsr -> _nomCliente = $_POST["nomUsrCliente"];
    $actualizarUsr -> _apeCliente = $_POST["apeUsrCliente"];
    $actualizarUsr -> _passCliente = $_POST["passUsrCliente"];
    $actualizarUsr -> _empresaCliente = $_POST["EempresaUsrCliente"];
    $actualizarUsr -> ajaxActualizarUsrCliente();
}

if ( $tipoOperacion == "eliminarUsr"){
    $eliminarUsr = (new ajaxUsrCliente);
    $eliminarUsr -> _idUsrCliente = $_POST["id_usrCliente"];
    $eliminarUsr -> ajaxEliminarUsr();
}

?>