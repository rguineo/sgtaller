<?php
require_once "../controllers/acta.controller.php";
require_once "../models/acta.model.php";

Class ajaxTaller{
    public $_idIngreso;
    public $_folioIngreso;
    public $_fechaIngreso;
    public $_idEmpresaIngreso;
    public $_idCentroIngreso;
    public $_idEquipoIngreso;
    public $_guiaDespachoIngreso;
    public $_nomTranportistaIngreso;
    public $_idRecepcionadoIngreso;
    public $_observacionIngreso;
    public $_accesoriosIngreso;
    
    public function ajaxNuevaActa(){
        $datos = array( "folio"=>$this->_folioIngreso,
                        "fechaIng"=>$this->_fechaIngreso,
                        "idEmpresa"=>$this->_idEmpresaIngreso,
                        "idCentro"=>$this->_idCentroIngreso,
                        "idEquipo"=>$this->_idEquipoIngreso,
                        "guiaDespacho"=>$this->_guiaDespachoIngreso,
                        "nomTransporte"=>$this->_nomTranportistaIngreso,
                        "idRecepcion"=>$this->_idRecepcionadoIngreso,
                        "observacion"=>$this->_observacionIngreso,
                        "accesorios"=>$this->_accesoriosIngreso);
        $nuevaActa = (new ctrActa);
        $respuesta = $nuevaActa -> ctrGuardaNuevaActa($datos);
        echo $respuesta;
    }

}

$tipoOperacion = $_POST["tipoOperacion"];

if ( $tipoOperacion == "nuevoIngresoTaller"){
    $nuevoIngreso = (new ajaxTaller);
    $nuevoIngreso -> _folioIngreso = $_POST["folio"];
    $nuevoIngreso -> _fechaIngreso = $_POST["fecha"];
    $nuevoIngreso -> _idEmpresaIngreso = $_POST["empresaTaller"];
    $nuevoIngreso -> _idCentroIngreso = $_POST["centroTaller"];
    $nuevoIngreso -> _idEquipoIngreso = $_POST["equipoTaller"];
    $nuevoIngreso -> _guiaDespachoIngreso = $_POST["guia"];
    $nuevoIngreso -> _nomTranportistaIngreso = $_POST["transporte"];
    $nuevoIngreso -> _idRecepcionadoIngreso = $_POST["idRecepcion"];
    $nuevoIngreso -> _observacionIngreso = $_POST["observacion"];
    $nuevoIngreso -> _accesoriosIngreso = $_POST["accesorios"];
    $nuevoIngreso -> ajaxNuevaActa();

}


?>