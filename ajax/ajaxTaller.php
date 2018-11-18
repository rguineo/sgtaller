<?php
require_once "../controllers/acta.controller.php";
require_once "../models/acta.model.php";
require_once "../controllers/ordenTrabajo.controller.php";
require_once "../models/ordenTrabajo.model.php";


Class ajaxTaller{
    public $_idIngreso;
    public $_folioIngreso;
    public $_tecnicoIngreso;
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
                        "idTecnico"=>$this->_tecnicoIngreso,
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

        // Trae el numero de la ultima acta ingresada
        $ultimaActa = (new ctrActa);
        $lastActa = $ultimaActa -> ctrUltimaActa();

        $last = $lastActa["id_acta"];
        // // Inserta y crea la Orden de trabajo
        $nuevaOTrabajo = (new ctrOrdenTrabajo);
        $resp = $nuevaOTrabajo -> ctrNuevaOrdenTrabajo($datos, $last);

        echo $respuesta;
    }

}

$tipoOperacion = $_POST["tipoOperacion"];

if ( $tipoOperacion == "nuevoIngresoTaller"){
    $nuevoIngreso = (new ajaxTaller);
    $nuevoIngreso -> _folioIngreso = $_POST["folio"];
    $nuevoIngreso -> _tecnicoIngreso = $_POST["tecnicoTaller"];
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