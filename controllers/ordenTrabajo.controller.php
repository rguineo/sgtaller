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

    public function ctrActualizarOrden($datos){
        $tabla = "ordenTrabajo";
        $actualizarOrden = (new mdlOrdenTrabajo);
        $respuesta = $actualizarOrden -> mdlActualizarOrden($tabla, $datos);
        return $respuesta;
    }

    public function ctrContarEq(){
        $tabla = "ordenTrabajo";
        $contarEquipos = (new mdlOrdenTrabajo);
        $respuesta = $contarEquipos -> mdlContarOrden($tabla);
        return $respuesta;
    }

    public function ctrTodosDespachos(){
        $tabla = "ordenTrabajo";
        $todasOrdenes = (new mdlOrdenTrabajo);
        $respuesta = $todasOrdenes -> mdlTodosDespachos($tabla);
        return $respuesta;
    }
    
    public function ctrTodosFinalizados(){
        $tabla = "ordenTrabajo";
        $todasOrdenes = (new mdlOrdenTrabajo);
        $respuesta = $todasOrdenes -> mdlTodosFinalizados($tabla);
        return $respuesta;
    }

    public function crtDespacharEquipo($id){
        $tabla = "ordenTrabajo";
        $despachar = (new mdlOrdenTrabajo);
        $respuesta = $despachar -> mdlDespacharEquipo($tabla, $id);
        return $respuesta;
    }

}

?>