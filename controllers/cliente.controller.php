<?php 

class ctrCliente{
    private $_datos = array();

    public function setDatos($datos){
        $this->_datos = $datos;
    }

    public function getDatos(){
        return $this->_datos;
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
}
?>