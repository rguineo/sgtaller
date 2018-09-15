<?php
include_once ("../controllers/zonas.controller.php");
include_once ("../models/zonas.model.php");

Class ctrRegiones{
    private $id_pais;
    private $id_region;
    private $id_ciudad;

    public function setIdPais($id){
        $this->id_pais = $id;
    }

    public function getIdPais(){
        return $this->id_pais;
    }

    public function setIdRegion($idRegion){
        $this->id_region = $idRegion;
    }

    public function getIdRegion(){
        return $this->id_region;
    }

    public function setIdCiudad($idCiudad){
        $this->id_ciudad = $idCiudad;
    }

    public function getIdCiudad(){
        return $this->id_ciudad;
    }


    public function listarRegiones(){
        $id = $this->getIdPais();
        $region = new ControllerZonas();
        $region -> setIdPais($id);
        $respuesta = $region -> ctrListarRegion();
        $listaRegion = "<option value='0' selected> Elija una opcion</option>";
        foreach ($respuesta as $key => $value) {
            $listaRegion .= "<option value=".$value['id_region'].">".$value[1]."</option>";
        }
        echo $listaRegion;
    }

    public function listarCiudades(){
        $id = $this->getIdRegion();
        $ciudad = new ControllerZonas();
        $ciudad -> setIdRegion($id);
        $respuesta = $ciudad -> ctrListarCiudades();
        $listaCiudad = "<option value='0' selected> Elija una opcion</option>";
        foreach ($respuesta as $key => $value) {
            $listaCiudad .= "<option value=".$value['id_ciudad'].">".$value[1]."</option>";
        }
        echo $listaCiudad;
    }

    public function listarComunas(){
        $id = $this->getIdCiudad();
        $comuna = new ControllerZonas();
        $comuna -> setIdCiudad($id);
        $respuesta = $comuna -> ctrListarComunas();
        $listaComuna = "<option value='0' selected> Elija una opcion</option>";
        foreach ($respuesta as $key => $value) {
            $listaComuna .= "<option value=".$value['id_comuna'].">".$value[1]."</option>";
        }
        printf( $listaComuna );
    }
}

if (isset($_POST["id_pais"])){
    $id = $_POST["id_pais"];
    $cmbRegion = new ctrRegiones();
    $cmbRegion -> setIdPais($_POST["id_pais"]);
    $cmbRegion -> listarRegiones();

}else if (isset($_POST["id_region"])){
    $id = $_POST["id_region"];
    $cmbRegion = new ctrRegiones();
    $cmbRegion -> setIdRegion($_POST["id_region"]);
    $cmbRegion -> listarCiudades();

}else if (isset($_POST["id_ciudad"])){
    $id = $_POST["id_ciudad"];
    $cmbRegion = new ctrRegiones();
    $cmbRegion -> setIdCiudad($_POST["id_ciudad"]);
    $cmbRegion -> listarComunas();
}



?>