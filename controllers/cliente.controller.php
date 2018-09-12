<?php 

class ctrCliente{
    private $_datos = array();
    private $_idCliente;

    public function setDatos($datos){
        $this->_datos = $datos;
    }

    public function getDatos(){
        return $this->_datos;
    }

    public function setIdCliente($id){
        $this->_idCliente = $id;
    }

    public function getIdCliente(){
        return $this->_idCliente;
    }

    public function ctrGuardarCliente(){
        $tabla = "empresa";
        $datas = $this->getDatos();
        $cliente = new mdlCliente();
        $cliente->setDatos($datas);
        $cliente->setTabla($tabla);
        $respuesta = $cliente->mdlGuardarCliente();
        return $respuesta;
    }

    public function ctrTodosClientes(){
        $tabla = "empresa";
        $Tcliente = new mdlCliente();
        $Tcliente->setTabla($tabla);
        $respuesta = $Tcliente->mdlMostrarTclientes();
        return $respuesta;
    }

    public function ctrEliminarCliente(){
        $tabla = "empresa";
        $id = $this->getIdCliente();
        $eliminar = new mdlCliente();
        // $eliminar -> setIdCliente($id);
        // $eliminar -> setTabla($tabla);
        $respuesta = $eliminar -> mdlEliminarCliente($tabla, $id);
        return $respuesta;
    }

    public function ctrEditarCliente(){
        $tabla = "empresa";
        $id = $this->getIdCliente();
        $eliminar = new mdlCliente();

        $respuesta = $eliminar -> mdlEditarCliente($tabla, $id);
        return $respuesta;
    }
}
?>