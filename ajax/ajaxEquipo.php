<?php
include_once ("../controllers/equipo.controller.php");
include_once ("../models/equipo.model.php");

Class Equipo{
    public $_idEquipo;
    
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
}

$tipoOperacion = $_POST["tipoOperacion"];

if ($tipoOperacion == "eliminarEquipo"){
    $eliminarEquipo = new Equipo();
    $eliminarEquipo -> setIdEquipo($_POST["id"]);
    $eliminarEquipo -> eliminarEquipo();
  }

if ($tipoOperacion == "nuevoEquipo"){
    $nuevoEquipo = new Equipo();
    $nuevoEquipo -> _nSerie = $_POST["nSerie"];
}
?>