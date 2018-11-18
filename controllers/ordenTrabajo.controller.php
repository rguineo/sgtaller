<?php 

Class ctrOrdenTrabajo{

    public function ctrNuevaOrdenTrabajo($datos, $last){
        $tabla = "ordenTrabajo";
        $nuevaOrdenTrabajo = (new mdlOrdenTrabajo);
        $respuesta = $nuevaOrdenTrabajo -> mdlNuevaOrdenTrabajo($tabla, $datos, $last);
        return $respuesta;
    }

    public function ctrTodasOrdenes(){
        $tabla = "ordenTrabajo";
        $todasOrdenes = (new mdlOrdenTrabajo);
        $respuesta = $todasOrdenes -> mdlTodasOrdenes($tabla);
        return $respuesta;
    }

    public function ctrBuscarOrden($id){
        $tabla = "ordenTrabajo";
        $buscarOrden = (new mdlOrdenTrabajo);
        $respuesta = $buscarOrden -> mdlBuscarOrden($tabla, $id);
        return $respuesta;
    }


}

?>