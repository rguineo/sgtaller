<?php 

require_once "../controllers/terrenos.controller.php";
require_once "../models/terrenos.model.php";

Class ajaxTerreno{
    public $_idTerreno;
    public $_fecha;
    public $_idEmpresa;
    public $_idCentro;
    public $_reponsable;
    public $_idEquipo;
    public $_trabajo;
    public $_recomendaciones;
    public $_repuestos;

    public function ajaxGuardarTerreno(){
        $datos = array( "fecha"=>$this->_fecha,
                        "idEmpresa"=>$this->_idEmpresa,
                        "idCentro"=>$this->_idCentro,
                        "responsable"=>$this->_reponsable,
                        "idEquipo"=>$this->_idEquipo,
                        "trabajo"=>$this->_trabajo,
                        "recomendaciones"=>$this->_recomendaciones,
                        "repuestos"=>$this->_repuestos);

        $nuevoTerreno = (new ctrTerrenos);
        $respuesta = $nuevoTerreno -> ctrGuardarTerreno($datos);
        echo $respuesta;
    }

    public function ajaxBuscarTerreno(){
        $idTerreno = $this->_idTerreno;
        $buscarTerreno = (new ctrTerrenos);
        $respuesta = $buscarTerreno -> ctrBuscarterreno($idTerreno);
        echo json_encode ($respuesta);
    }
}

$tipoOperacion = $_POST["tipoOperacion"];

if ( $tipoOperacion == "nuevoTerreno"){
    $nuevoTerreno = (new ajaxTerreno);
    $nuevoTerreno -> _fecha = $_POST["fechaTerreno"];
    $nuevoTerreno -> _idEmpresa = $_POST["empresaTerreno"];
    $nuevoTerreno -> _idCentro = $_POST["centroTerreno"];
    $nuevoTerreno -> _reponsable = $_POST["responsable"];
    $nuevoTerreno -> _idEquipo = $_POST["equipoTerreno"];
    $nuevoTerreno -> _trabajo = $_POST["trabajo"];
    $nuevoTerreno -> _recomendaciones = $_POST["recomendaciones"];
    $nuevoTerreno -> _repuestos = $_POST["repuestos"];
    $nuevoTerreno -> ajaxGuardarTerreno();
}

if ( $tipoOperacion == "editarTerreno"){
    $editarTerreno = (new ajaxTerreno);
    $editarTerreno -> _idTerreno = $_POST["id_terreno"];
    $editarTerreno -> ajaxBuscarTerreno();
}

?>