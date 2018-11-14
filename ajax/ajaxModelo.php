<?php
require_once "../controllers/modelos.controller.php";
require_once "../models/modelos.model.php";

Class ajaxMarca{
    public $_idModelo;

    public function ajaxMostrarModelo(){
        $id = $this->_idModelo;

        $modelos = (new ctrModelos);
        $respuesta = $modelos -> ctrMostrarModelos($id);

        $listaModelos = "<option> Elija una opcion</option>";
        
        foreach ($respuesta as $key => $value) {
            $listaModelos .= "<option value=".$value['id_modelo'].">".$value['modelo']."</option>";
        }
        printf ($listaModelos);
    }

}

if (isset($_POST["id_marca"])){
    $mostrarMarca = (new ajaxMarca);
    $mostrarMarca->_idModelo = $_POST["id_marca"];
    $mostrarMarca -> ajaxMostrarModelo();
}


?>