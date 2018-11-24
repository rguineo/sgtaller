<?php

Class ctrUsrCliente{

    public function ctrMostrarUsrCliente(){
        $tabla = "usrcliente";
        $clientes = (new mdlUsrCliente);
        $respuesta = $clientes -> mdlMostrarUsrCliente($tabla);
        return $respuesta;
    }

    public function ctrNuevoUsrCliente($datos){
        $tabla = "usrcliente";
        $nuevoclientes = (new mdlUsrCliente);
        $respuesta = $nuevoclientes -> mdlNuevoUsrCliente($tabla, $datos);
        return $respuesta;
    }

    public function ctrEncender($id){
        $tabla = "usrcliente";
        $encender = (new mdlUsrCliente);
        $respuesta = $encender -> mdlEncender($tabla, $id);
        return $respuesta;
    }

    public function ctrApagar($id){
        $tabla = "usrcliente";
        $apagar = (new mdlUsrCliente);
        $respuesta = $apagar -> mdlApagar($tabla, $id);
        return $respuesta;
    }

    public function ctrBuscarUsr($id){
        $tabla = "usrcliente";
        $buscar = (new mdlUsrCliente);
        $respuesta = $buscar -> mdlBuscarUsr($tabla, $id);
        return $respuesta;
    }

    public function ctrActualizarUsrCliente($datos){
        $tabla = "usrcliente";
        $nuevoclientes = (new mdlUsrCliente);
        $respuesta = $nuevoclientes -> mdlActualizarUsrCliente($tabla, $datos);
        return $respuesta;
    }

    public function ctrEliminarUsr($id){
        $tabla = "usrcliente";
        $nuevoclientes = (new mdlUsrCliente);
        $respuesta = $nuevoclientes -> mdlEliminarUsr($tabla, $id);
        return $respuesta; 
    }

}
?>