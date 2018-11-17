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

    public function ajaxActualizarTerreno(){
        $datos = array( "idTerreno"=>$this->_idTerreno,
                        "fecha"=>$this->_fecha,
                        "idEmpresa"=>$this->_idEmpresa,
                        "idCentro"=>$this->_idCentro,
                        "responsable"=>$this->_reponsable,
                        "idEquipo"=>$this->_idEquipo,
                        "trabajo"=>$this->_trabajo,
                        "recomendaciones"=>$this->_recomendaciones,
                        "repuestos"=>$this->_repuestos);

        $nuevoTerreno = (new ctrTerrenos);
        $respuesta = $nuevoTerreno -> ctrActualizarTerreno($datos);
        echo $respuesta;
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

if ( $tipoOperacion == "actualizarTerreno"){
    $actualizarTerreno = (new ajaxTerreno);
    $actualizarTerreno -> _idTerreno = $_POST["idTerreno"];
    $actualizarTerreno -> _fecha = $_POST["EfechaTerreno"];
    $actualizarTerreno -> _idEmpresa = $_POST["EempresaTerreno"];
    $actualizarTerreno -> _idCentro = $_POST["EcentroTerreno"];
    $actualizarTerreno -> _reponsable = $_POST["Eresponsable"];
    $actualizarTerreno -> _idEquipo = $_POST["EequipoTerreno"];
    $actualizarTerreno -> _trabajo = $_POST["Etrabajo"];
    $actualizarTerreno -> _recomendaciones = $_POST["Erecomendaciones"];
    $actualizarTerreno -> _repuestos = $_POST["Erepuestos"];
    $actualizarTerreno -> ajaxActualizarTerreno();

}

?>