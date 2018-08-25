<?php
include_once ("../controllers/zonas.controller.php");
include_once ("../models/zonas.model.php");

Class ctrRegiones{
    private $id_pais;

    public function setIdPais($id){
        $this->id_pais = $id;
    }

    public function getIdPais(){
        return $this->id_pais;
    }

    public function listarRegiones(){
        $id = $this->getIdPais();
        $region = new ControllerZonas();
        $region -> setIdPais($id);
        $respuesta = $region -> ctrListarRegion();
        $listaRegion = "<option value='0' selected> Elija una opcion</option>";
        foreach ($respuesta as $key => $value) {
            $listaRegion .= "<option value='$value[0]'>$value[1]</option>";
        }
        echo $listaRegion;
    }
}

if ($_POST["id_pais"]){
    $id = $_POST["id_pais"];
    $cmbRegion = new ctrRegiones();
    $cmbRegion -> setIdPais($_POST["id_pais"]);
    $cmbRegion -> listarRegiones();
}else{
    echo "<script> alert('VACIO') </script>";
}

?>