<?php

Class ctrEquipo{
    private $_datos = array();
    private $_idEquipo;

    public function setDatos($datos){
        $this->_datos = $datos;
    }

    public function getDatos(){
        return $this->_datos;
    }

    public function setIdEquipo($id){
        $this->_idEquipo = $id;
    }

    public function getIdEquipo(){
        return $this->_idEquipo;
    }
    
    public function ctrMostrarEquipo(){
        $tabla = "equipo";
        $Tequipo = new mdlEquipo();
        $Tequipo->setTabla($tabla);
        $repuesta = $Tequipo->mdlMostrarEquipo();
        return $repuesta;
    }

    public function ctrEliminarEquipo(){
        $tabla = "equipo";
        $id = $this->getIdEquipo();
        $eliminar = new mdlEquipo();
        // $eliminar -> setIdCliente($id);
        // $eliminar -> setTabla($tabla);
        $respuesta = $eliminar -> mdlEliminarEquipo($tabla, $id);
        return $respuesta;
    }
}

?>