<?php
require_once "../controllers/ordenTrabajo.controller.php";
require_once "../models/ordenTrabajo.model.php";

Class ajaxOrden{
    public $_idOrden;

    public function ajaxBuscarOrden(){
        $id = $this->_idOrden;
        $buscarOrden = (new ctrOrdenTrabajo);
        $respuesta = $buscarOrden->ctrBuscarOrden($id);
        echo json_encode($respuesta);
    }


}

$tipoOperacion = $_POST["tipoOperacion"];

if ( $tipoOperacion == "editarOrden"){
    $buscarOrden = (new ajaxOrden);
    $buscarOrden -> _idOrden = $_POST["id_orden"];
    $buscarOrden -> ajaxBuscarOrden();
}

?>