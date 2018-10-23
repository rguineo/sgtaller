<?php 

require_once "controllers/template.controller.php";
require_once "controllers/enrutamiento.controller.php";
require_once "controllers/sesion.controller.php";
require_once "controllers/zonas.controller.php";
require_once "controllers/equipo.controller.php";
require_once "controllers/cliente.controller.php";
require_once "controllers/centros.controller.php";
require_once "controllers/usuario.controller.php";
require_once "controllers/taller.controller.php";
require_once "controllers/bodega.controller.php";
require_once "controllers/productos.controller.php";
require_once "controllers/stock.controller.php";


require_once "models/equipo.model.php";
require_once "models/sesion.modelo.php";
require_once "models/zonas.model.php";
require_once "models/cliente.model.php";
require_once "models/centros.model.php";
require_once "models/usuario.modelo.php";
require_once "models/taller.model.php";
require_once "models/bodega.model.php";
require_once "models/producto.modelo.php";
require_once "models/stock.modelo.php";

error_reporting(0);
$template = new ControllerTemplate();
$template -> template();
?>