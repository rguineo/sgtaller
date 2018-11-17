<?php
include_once ("../controllers/equipo.controller.php");
include_once ("../models/equipo.model.php");

Class Equipo{
    public $_idEquipo;
    public $_nSerie;
    public $_nomEquipo;
    public $_marcaEquipo;
    public $_modeloEquipo;
    public $_empresaEquipo;


    public function setIdEquipo($id){
        $this->_idEquipo = $id;
    }

    public function getIdEquipo(){
        return $this->_idEquipo;
    }

    public function eliminarEquipo(){
        $id = $this->getIdEquipo();
        $eliminar = new ctrEquipo();
        $eliminar -> setIdEquipo($id);
        $respuesta = $eliminar -> ctrEliminarEquipo();
        echo $respuesta;
    }

    public function agregarEquipo(){
        $datos = array("nSerie"=>$this->_nSerie,
                        "nomEquipo"=>$this->_nomEquipo,
                        "marcaEquipo"=>$this->_marcaEquipo,
                        "modeloEquipo"=>$this->_modeloEquipo,
                        "empresaEquipo"=>$this->_empresaEquipo);
        $agregarEquipo = (new ctrEquipo);
        $respuesta = $agregarEquipo -> ctrAgregarEquipo($datos);
        echo $respuesta;
    }

    public function editarEquipo(){
        $id = $this->_idEquipo;
        $editarEq = (new ctrEquipo);
        $respuesta = $editarEq->ctrBuscarEquipo($id);
        echo json_encode($respuesta);
    }

    public function actualizarEquipo(){
        $datos = array("id_equipo"=>$this->_idEquipo,
                        "nSerie"=>$this->_nSerie,
                        "nomEquipo"=>$this->_nomEquipo,
                        "marcaEquipo"=>$this->_marcaEquipo,
                        "modeloEquipo"=>$this->_modeloEquipo,
                        "empresaEquipo"=>$this->_empresaEquipo);

        $agregarEquipo = (new ctrEquipo);
        $respuesta = $agregarEquipo -> ctrActualizarEquipo($datos);
        echo $respuesta;
    }

    public function ajaxBuscarEquipo(){
        $id = $this->_idEquipo;

        $buscar = (new ctrEquipo);
        $respuesta = $buscar->ctrBuscarEquipoEmpresa($id);
        
        $buscarOption = "<option value=''>Elija el Equipo </option>";   
        foreach ($respuesta as $key => $value) {
            $buscarOption .= "<option value=".$value["id_equipo"].">".$value["nSerie"]." | ".$value["nomEquipo"]."</option>"; 
        }
        printf ($buscarOption);
    }
}

$tipoOperacion = $_POST["tipoOperacion"];

if ($tipoOperacion == "eliminarEquipo"){
    $eliminarEquipo = (new Equipo);
    $eliminarEquipo -> setIdEquipo($_POST["id"]);
    $eliminarEquipo -> eliminarEquipo();
  }

if ($tipoOperacion == "nuevoEquipo"){
    $nuevoEquipo = (new Equipo);
    $nuevoEquipo -> _nSerie = $_POST["nSerie"];
    $nuevoEquipo -> _nomEquipo = $_POST["nombreEquipo"];
    $nuevoEquipo -> _marcaEquipo = $_POST["marca"];
    $nuevoEquipo -> _modeloEquipo = $_POST["modelo"];
    $nuevoEquipo -> _empresaEquipo = $_POST["empresaSelect"];
    $nuevoEquipo -> agregarEquipo();
}

if ($tipoOperacion == "editarEquipo"){
    $editarEquipo = (new Equipo);
    $editarEquipo -> _idEquipo = $_POST["id_equipo"];
    $editarEquipo -> editarEquipo();
}

if ($tipoOperacion == "actualizarEquipo"){
    $actualizarEquipo = (new Equipo);
    $actualizarEquipo -> _idEquipo = $_POST["idEquipo"];
    $actualizarEquipo -> _nSerie = $_POST["EnSerie"];
    $actualizarEquipo -> _nomEquipo = $_POST["EnombreEquipo"];
    $actualizarEquipo -> _marcaEquipo = $_POST["Emarca"];
    $actualizarEquipo -> _modeloEquipo = $_POST["Emodelo"];
    $actualizarEquipo -> _empresaEquipo = $_POST["Eempresa"];
    $actualizarEquipo -> actualizarEquipo();
}

if ( $tipoOperacion == "buscarEquipo"){
    $buscarEquipo = (new Equipo);
    $buscarEquipo -> _idEquipo = $_POST["id"];
    $buscarEquipo -> ajaxBuscarEquipo();
}

?>