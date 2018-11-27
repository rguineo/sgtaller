<?php 

Class ctrordentrabajo{

    public function ctrNuevaordentrabajo($datos, $last){
        $tabla = "ordentrabajo";
        $nuevaordentrabajo = (new mdlordentrabajo);
        $respuesta = $nuevaordentrabajo -> mdlNuevaordentrabajo($tabla, $datos, $last);
        return $respuesta;
    }

    public function ctrTodasOrdenes(){
        $tabla = "ordentrabajo";
        $todasOrdenes = (new mdlordentrabajo);
        $respuesta = $todasOrdenes -> mdlTodasOrdenes($tabla);
        return $respuesta;
    }

    public function ctrBuscarOrden($id){
        $tabla = "ordentrabajo";
        $buscarOrden = (new mdlordentrabajo);
        $respuesta = $buscarOrden -> mdlBuscarOrden($tabla, $id);
        return $respuesta;
    }

    public function ctrActualizarOrden($datos){
        $tabla = "ordentrabajo";
        $actualizarOrden = (new mdlordentrabajo);
        $respuesta = $actualizarOrden -> mdlActualizarOrden($tabla, $datos);
        return $respuesta;
    }

    public function ctrContarEq(){
        $tabla = "ordentrabajo";
        $contarEquipos = (new mdlordentrabajo);
        $respuesta = $contarEquipos -> mdlContarOrden($tabla);
        return $respuesta;
    }

    public function ctrTodosDespachos(){
        $tabla = "ordentrabajo";
        $todasOrdenes = (new mdlordentrabajo);
        $respuesta = $todasOrdenes -> mdlTodosDespachos($tabla);
        return $respuesta;
    }
    
    public function ctrTodosFinalizados(){
        $tabla = "ordentrabajo";
        $todasOrdenes = (new mdlordentrabajo);
        $respuesta = $todasOrdenes -> mdlTodosFinalizados($tabla);
        return $respuesta;
    }

    public function crtDespacharEquipo($id){
        $tabla = "ordentrabajo";
        $despachar = (new mdlordentrabajo);
        $respuesta = $despachar -> mdlDespacharEquipo($tabla, $id);
        return $respuesta;
    }

}

?>