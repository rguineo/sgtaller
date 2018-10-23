<?php
require_once "../controllers/stock.controller.php";
require_once "../models/stock.modelo.php";

Class ajaxStock{
    public $_idProducto;
    public $_idStock;
    public $_precio;
    public $_stock;
    public $_nCritico;
    public $_cantidad;
    public $_nSession;
     
    public function ajaxBuscarStock(){
        $id = $this->_idProducto;
        $respuesta = (new ctrStock)->ctrBuscarStock($id);
        echo json_encode($respuesta);        
    }

    public function ajaxActualizaStock(){
        $idStock = $this->_idStock;
        $idSession = $this->_nSession;
        $_newStock = (int)$this->_stock + (int)$this->_cantidad;

        if ($idStock == "-1") {
            $datos = array("idProducto"=>$this->_idProducto,
                            "stock"=>$_newStock,
                            "nCritico"=>$this->_nCritico,
                            "nSession"=>$idSession);
            $respuesta = (new ctrStock)->ctrNuevoStock($datos);
            echo $respuesta;
        } else {
            $datos = array("idProducto"=>$this->_idProducto,
                            "idStock"=>$this->_idStock,
                            "stock"=>$_newStock,
                            "nCritico"=>$this->_nCritico,
                            "nSession"=>$idSession);
            $respuesta = (new ctrStock)->ctrActualizarStock($datos);
            echo $respuesta;           
        }
    }

    public function ajaxCargarStock(){
        $id = $this->_idStock;
        $respuesta = (new ctrStock)->ctrCargarStock($id);
        echo json_encode($respuesta);
    }

    public function ajaxEgresoStock(){
        $id = $this->_idStock;
        $idSession = $this->_nSession;
        $egreso = (int)$this->_stock - (int)$this->_cantidad;
        $respuesta = (new ctrStock)->ctrEgresoStock($id, $egreso, $idSession);
        echo $respuesta;
    }
}

$tipoOperacion = $_POST["tipoOperacion"];
session_start();

switch ($tipoOperacion) {
    case 'cargarProducto':
        $buscarStock = (new ajaxStock);
        $buscarStock -> _idProducto = $_POST["id"];
        $buscarStock -> ajaxBuscarStock();
        break;

        case 'actualizarStock':
        $actualizarStock = (new ajaxStock);
        $actualizarStock -> _idProducto = $_POST["idProd"];
        $actualizarStock -> _idStock = $_POST["idStock"];
        $actualizarStock -> _precio = $_POST["precio"];
        $actualizarStock -> _stock = $_POST["stock"];
        $actualizarStock -> _nCritico = $_POST["critico"];
        $actualizarStock -> _cantidad = $_POST["cantidad"];
        $actualizarStock -> _nSession = $_SESSION["nombre"];
        $actualizarStock -> ajaxActualizaStock();
        break;

        case 'cargarStock':
        $buscarStock = (new ajaxStock);
        $buscarStock -> _idStock = $_POST["id"];
        $buscarStock -> ajaxCargarStock();
        break;

        case 'egresoStock':
        $egresoStock = (new ajaxStock);
        $egresoStock -> _idProducto = $_POST["idProd"];
        $egresoStock -> _idStock = $_POST["idStock"];
        $egresoStock -> _precio = $_POST["precio"];
        $egresoStock -> _stock = $_POST["stock"];
        $egresoStock -> _nCritico = $_POST["critico"];
        $egresoStock -> _cantidad = $_POST["cantidad"];
        $egresoStock -> _nSession = $_SESSION["nombre"];
        $egresoStock -> ajaxEgresoStock();
        break;
        
    default:
        # code...
        break;
}



?>