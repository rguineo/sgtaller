<?php 

require_once "controllers/template.controller.php";
require_once "controllers/enrutamiento.controller.php";
require_once "controllers/sesion.controller.php";
require_once "controllers/zonas.controller.php";
require_once "controllers/equipo.controller.php";
require_once "controllers/cliente.controller.php";
require_once "controllers/centros.controller.php";

require_once "models/equipo.model.php";
require_once "models/sesion.modelo.php";
require_once "models/zonas.model.php";
require_once "models/cliente.model.php";
require_once "models/centros.model.php";

error_reporting(0);
$template = new ControllerTemplate();
$template -> template();
?>