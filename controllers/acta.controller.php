<?php 

Class ctrActa{

    public function ctrGuardaNuevaActa($datos){
        $tabla = "actarecepcion";
        $nuevaActa = (new mdlActa);
        $respuesta = $nuevaActa -> mdlGuardaNuevaActa($tabla, $datos);
        return $respuesta;
    }

}
?>