<?php
require_once "../controllers/modelo.controller.php";
require_once "../models/modelo.model.php";

Class ajaxMarca{
    public $_idModelo;

    public function ajaxMostrarModelo(){
        $id = $this->_idModelo;

        $modelos = (new ctrModelo);
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