<?php
require_once "../controllers/ordenTrabajo.controller.php";
require_once "../models/ordenTrabajo.model.php";

Class ajaxOrden{
    public $_idOrden;
    public $_tecnico;
    public $_diagnostico;
    public $_repuestos;
    public $_estado;
    
    public function ajaxBuscarOrden(){
        $id = $this->_idOrden;
        $buscarOrden = (new ctrOrdenTrabajo);
        $respuesta = $buscarOrden->ctrBuscarOrden($id);
        echo json_encode($respuesta);
    }

    public function ajaxActualizarOrden(){
        $datos = array( "idOrden"=>$this->_idOrden,
                        "tecnico"=>$this->_tecnico,
                        "diagnostico"=>$this->_diagnostico,
                        "repuestos"=>$this->_repuestos,
                        "estado"=>$this->_estado);
        $actualizarOrden = (new ctrOrdenTrabajo);
        $respuesta = $actualizarOrden -> ctrActualizarOrden($datos);
        echo $respuesta;
    }
}

$tipoOperacion = $_POST["tipoOperacion"];

if ( $tipoOperacion == "editarOrden"){
    $buscarOrden = (new ajaxOrden);
    $buscarOrden -> _idOrden = $_POST["id_orden"];
    $buscarOrden -> ajaxBuscarOrden();
}

if ( $tipoOperacion == "actualizarOrden"){
    $actualizarOrden = (new ajaxOrden);
    $actualizarOrden -> _idOrden = $_POST["idOrden"];
    $actualizarOrden -> _idTecnico = $_POST["tecnico"];
    $actualizarOrden -> _diagnostico = $_POST["diagnostico"];
    $actualizarOrden -> _repuestos = $_POST["repuestos"];
    $actualizarOrden -> _estado = $_POST["estado"];
    $actualizarOrden -> ajaxActualizarOrden();
}

?>