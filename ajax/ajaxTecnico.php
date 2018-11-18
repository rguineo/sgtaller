<?php
require_once "../controllers/tecnicos.controller.php";
require_once "../models/tecnicos.model.php";

Class ajaxTecnico{

    public function ajaxTodoTecnicos(){

        $todosTec = (new ctrTecnicos);
        $respuesta = $todosTec->ctrTodosTecnicos();
        $tecn = "<option value='0'>Asigne Tecnico</option>";
        foreach ($respuesta as $key => $value) {
           $tecn .= "<option value='".$value["id_tecnico"]."'>".$value["nomTecnico"]."</option>";
        }
        printf ($tecn);
    }
}

$tipoOperacion = $_POST["tipoOperacion"];

if ( $tipoOperacion == "todosTecnicos"){
    $todosTecnicos = (new ajaxTecnico);
    $todosTecnicos -> ajaxTodoTecnicos();
}

?>