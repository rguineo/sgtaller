<?php 
/*CONTROLADORES*/
require_once "controllers/template.controller.php";

/*MODELO*/
require_once "models/rutas.php";

$template = new ControllerTemplate();
$template -> login();
    echo 'Hola Mundo';
?>