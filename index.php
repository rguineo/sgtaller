<?php 

require_once "controllers/template.controller.php";
require_once "controllers/enrutamiento.controller.php";
require_once "controllers/sesion.controller.php";
require_once "controllers/pais.controller.php";

require_once "models/sesion.modelo.php";
require_once "models/pais.model.php";

error_reporting(0);
$template = new ControllerTemplate();
$template -> template();
?>