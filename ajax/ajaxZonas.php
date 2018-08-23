<?php
include_once ("../controllers/zonas.controllers.php");
include_once ("../models/zonas.model.php");

Class ctrRegiones{
    private $id_pais;

    public function setIdPais($id){
        $this->id_pais = $id;
    }

    public function getIdPais(){
        return $this->id_pais;
    }

    public function ListarRegiones(){
        $id = $this->getIdPais();
        $region = new ControllerZonas;
        $region -> setIdPais($id);
        $respuesta = $region -> ListarRegion();
        return json_encode($respuesta);
    }
}

if ($_POST["id_pais"] != NULL){
    $cmbRegion = new ctrRegiones;
    $cmbRegion -> setIdPais($_POST["id_pais"]);
    $cmbRegion -> ListarRegiones();
}

?>