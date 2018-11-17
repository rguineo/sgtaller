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

    public function ctrAgregarEquipo($datos){
        $tabla = "equipo";
        $agregarEquipo = (new mdlEquipo);
        $respuesta = $agregarEquipo->mdlAgregarEquipo($tabla, $datos);
        return $respuesta;
    }

    public function ctrBuscarEquipo($id){
        $tabla = "equipo";
        $editarEq = (new mdlEquipo);
        $respuesta = $editarEq -> mdlBuscarEquipo($tabla, $id);
        return $respuesta; 
    }

    public function ctrActualizarEquipo($datos){
        $tabla = "equipo";
        $actualizar = (new mdlEquipo);
        $respuesta = $actualizar->mdlActualizarEquipo($tabla, $datos);
        return $respuesta;
    }

    public function ctrBuscarEquipoEmpresa($id){
        $tabla = "equipo";
        $buscarEqEmpresa = (new mdlEquipo);
        $respuesta = $buscarEqEmpresa -> ctrBuscarEqEmpresa($tabla, $id);
        return $respuesta;
    }
}

?>