<?php 

Class ctrActa{

    public function ctrGuardaNuevaActa($datos){
        $tabla = "actarecepcion";
        $nuevaActa = (new mdlActa);
        $respuesta = $nuevaActa -> mdlGuardaNuevaActa($tabla, $datos);
        return $respuesta;
    }

    public function ctrUltimaActa(){
        $tabla = "actarecepcion";
        $ultimaActa = (new mdlActa);
        $respuesta = $ultimaActa -> mdlUltimaActa($tabla);
        return $respuesta;
    }
}
?>