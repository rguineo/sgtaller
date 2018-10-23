<?php 
require_once "../controllers/productos.controller.php";
require_once "../models/productos.modelo.php";

Class ajaxProducto{
    public $_pId;
    public $_pNombre;
    public $_pDetalle;
    public $_pUnidad;
    public $_pPrecio;
    public $_pBarcode;
    public $_nSession;


    public function ajaxNuevoProducto(){

        $datos = array("nombre"=>$this->_pNombre,
                        "detalle"=>$this->_pDetalle,
                        "unidad"=>$this->_pUnidad,
                        "precio"=>$this->_pPrecio,
                        "barcode"=>$this->_pBarcode,
                        "nSession"=>$this->_nSession);

        $respuesta = (new crtProductos)->ctrNuevoProducto($datos);
        echo $respuesta;
    }

    public function ajaxEditarProducto(){
        $id = $this->_pId;
        $respuesta = (new crtProductos)->ctrBuscarProducto($id);
        echo json_encode($respuesta);
    }

    public function ajaxActualizarProducto(){

        $datos = array("id"=>$this->_pId,
                        "nombre"=>$this->_pNombre,
                        "detalle"=>$this->_pDetalle,
                        "unidad"=>$this->_pUnidad,
                        "precio"=>$this->_pPrecio,
                        "barcode"=>$this->_pBarcode,
                        "nSession"=>$this->_nSession);
        $respuesta = (new crtProductos)->ctrActualizarProducto($datos);
        echo $respuesta;
    }

    public function ajaxEliminarProducto(){
        $id = $this->_pId;
        $respuesta = (new crtProductos)->ctrEliminaProducto($id);
        echo $respuesta;
    }

    public function ajaxCargarProducto(){
        $id = $this->_pId;
        $respuesta = (new crtProductos)->ctrBuscarProducto($id);
        echo json_encode($respuesta);
    }

}

$tipoOperacion = $_POST["tipoOperacion"];
session_start();

switch ($tipoOperacion) {
    case 'nuevoProducto':
        $nuevoProducto = (new ajaxProducto);
        $nuevoProducto -> _pNombre = $_POST["nombre"];
        $nuevoProducto -> _pDetalle = $_POST["detalle"];
        $nuevoProducto -> _pUnidad = $_POST["unidad"];
        $nuevoProducto -> _pPrecio = $_POST["precio"];
        $nuevoProducto -> _pBarcode = $_POST["barcode"];
        $nuevoProducto -> _nSession = $_SESSION["nombre"];
        $nuevoProducto -> ajaxNuevoProducto();
        break;
    
    case 'editarProducto':
        $editarProducto = (new ajaxProducto);
        $editarProducto -> _pId = $_POST["id"];
        $editarProducto -> ajaxEditarProducto();
        break;

        case 'actualizarProducto':
        $actualizarProducto = (new ajaxProducto);
        $actualizarProducto -> _pId = $_POST["id"];
        $actualizarProducto -> _pNombre = $_POST["nombre"];
        $actualizarProducto -> _pDetalle = $_POST["detalle"];
        $actualizarProducto -> _pUnidad = $_POST["Eunidad"];
        $actualizarProducto -> _pPrecio = $_POST["precio"];
        $actualizarProducto -> _pBarcode = $_POST["barcode"];
        $actualizarProducto -> _nSession = $_SESSION["nombre"];
        $actualizarProducto -> ajaxActualizarProducto();
        break;

        case 'eliminarProducto':
        $editarProducto = (new ajaxProducto);
        $editarProducto -> _pId = $_POST["id"];
        $editarProducto -> ajaxEliminarProducto();
        break;

        case 'cargarProducto':
        $editarProducto = (new ajaxProducto);
        $editarProducto -> _pId = $_POST["id"];
        $editarProducto -> ajaxCargarProducto();
        break;       

    default:
        # code...
        break;
}

?>