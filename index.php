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
require_once "controllers/marcas.controller.php";
require_once "controllers/modelo.controller.php";
require_once "controllers/pais.controller.php";
require_once "controllers/region.controller.php";
require_once "controllers/ciudad.controller.php";

require_once "controllers/marcas.controller.php";
require_once "controllers/terrenos.controller.php";
require_once "controllers/acta.controller.php";
require_once "controllers/ordenTrabajo.controller.php";
require_once "controllers/tecnicos.controller.php";
require_once "controllers/usrCliente.controller.php";



require_once "models/equipo.model.php";
require_once "models/sesion.modelo.php";
require_once "models/zonas.model.php";
require_once "models/cliente.model.php";
require_once "models/centros.model.php";
require_once "models/usuario.modelo.php";
require_once "models/taller.model.php";
require_once "models/bodega.model.php";
require_once "models/productos.modelo.php";
require_once "models/stock.modelo.php";
require_once "models/marcas.model.php";
require_once "models/modelo.model.php";
require_once "models/pais.model.php";
require_once "models/region.model.php";
require_once "models/ciudad.model.php";

require_once "models/marcas.model.php";
require_once "models/terrenos.model.php";
require_once "models/acta.model.php";
require_once "models/ordenTrabajo.model.php";
require_once "models/tecnicos.model.php";
require_once "models/usrCliente.model.php";

error_reporting(0);
$template = new ControllerTemplate();
$template -> template();
?>