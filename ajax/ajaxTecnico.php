<?php
require_once "../controllers/tecnicos.controller.php";
require_once "../models/tecnicos.model.php";

Class ajaxTecnico{
    public $_idTecnico;
    public $_nomTecnico;
    public $_emlTecnico;

    public function ajaxTodoTecnicos(){
        $todosTec = (new ctrTecnicos);
        $respuesta = $todosTec->ctrTodosTecnicos();
        $tecn = "<option value='0'>Asigne Tecnico</option>";
        foreach ($respuesta as $key => $value) {
           $tecn .= "<option value='".$value["id_tecnico"]."'>".$value["nomTecnico"]."</option>";
        }
        printf ($tecn);
    }

    public function ajaxNuevoTecnico(){
        $datos = array("nomTecnico"=>$this->_nomTecnico,
                        "emlTecnico"=>$this->_emlTecnico);
        $nuevoTecnico = (new ctrTecnicos);
        $respuesta = $nuevoTecnico->ctrNuevoTecnico($datos);
        echo $respuesta;
    }

    public function ajaxBuscarTecncio(){
        $id = $this->_idTecnico;
        $buscartecnico = (new ctrTecnicos);
        $respuesta = $buscartecnico -> ctrBuscarTecnico($id);
        echo json_encode($respuesta);
    }

    public function ajaxActualizarTecnico(){
        $datos = array( "idTecnico"=>$this->_idTecnico,
                        "nomTecnico"=>$this->_nomTecnico,
                        "emlTecnico"=>$this->_emlTecnico);
        $actualizartecnico = (new ctrTecnicos);
        $respuesta = $actualizartecnico->ctrAactualizarTecnico($datos);
        echo $respuesta;
    }

    public function ajaxEliminarTecnico(){
        $id = $this->_idTecnico;
        $eliminar = (new ctrTecnicos);
        $respuesta = $eliminar->ctrEliminarTecnico($id);
        echo $respuesta;
    }
}

$tipoOperacion = $_POST["tipoOperacion"];

if ( $tipoOperacion == "todosTecnicos"){
    $todosTecnicos = (new ajaxTecnico);
    $todosTecnicos -> ajaxTodoTecnicos();
}

if ( $tipoOperacion == "nuevoTecnico"){
    $nuevoTecnico = (new ajaxTecnico);
    $nuevoTecnico -> _nomTecnico = $_POST["nombreTecnico"];
    $nuevoTecnico -> _emlTecnico = $_POST["correoTecnico"];
    $nuevoTecnico -> ajaxNuevoTecnico();
}

if ( $tipoOperacion == "editarTecnico"){
    $editarTecnico = (new ajaxTecnico);
    $editarTecnico -> _idTecnico = $_POST["id_tecnico"];
    $editarTecnico -> ajaxBuscarTecncio();
}

if ( $tipoOperacion == "actualizarTecnico"){
    $actualizarTecnico = (new ajaxTecnico);
    $actualizarTecnico -> _idTecnico = $_POST["idTecnico"];
    $actualizarTecnico -> _nomTecnico = $_POST["nombreTecnico"];
    $actualizarTecnico -> _emlTecnico = $_POST["correoTecnico"];
    $actualizarTecnico -> ajaxActualizarTecnico();
}

if ( $tipoOperacion == "eliminarTecnico"){
    $eliminarTecnico = (new ajaxTecnico);
    $eliminarTecnico -> _idTecnico = $_POST["id_tecnico"];
    $eliminarTecnico -> ajaxEliminarTecnico();
}

?>