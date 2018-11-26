<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Duotek SGT</title>
  

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- <link rel="stylesheet" href="views/dist/css/bootstrap.min.css"> -->

  <!-- <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
  <!-- <link rel="stylesheet" href="views/dist/css/AdminLTE.min.css"> -->
  <link rel="stylesheet" href="views/dist/css/skins/skin-purple.min.css">
  <link rel="stylesheet" href="views/dist/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
  
  <!-- <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">
  <!-- CCS para tabLa dinamica avanzada -->
  <link href='views/dist/css/dataTables.bootstrap.css' rel='stylesheet'>
  <link href='views/dist/css/dataTables.responsive.css' rel='stylesheet'>

  <link rel="stylesheet" href="views/dist/css/select2.css">
  <link rel="stylesheet" href="views/dist/css/select2-bootstrap.css">

  <link rel="stylesheet" href="views/dist/css/estilos.css">
  
</head>
<body class="hold-transition skin-purple sidebar-mini login-page">
  <?php
    session_start();
    
    if (isset($_SESSION["autenticar"]) && $_SESSION["autenticar"] == "ok") {
      include "modulos/header.php";
      include "modulos/main-sidebar.php";

      if( isset($_GET["ruta"])) {
        
        $enrutar = new ControllerEnrutamiento();
        $enrutar -> enrutamiento(); 
        include "modulos/modales/modal-".$_GET["ruta"].".php";

      } else {
        include "modulos/home.php";
      }
        include "modulos/footer.php";
    } else {
        include "modulos/login.php";
    }
  ?>

<!-- <script src="views/bower_components/jquery/dist/jquery.min.js"></script> -->
<script src="views/dist/js/jquery-3.3.1.min.js"></script>

<!-- <script src="views/dist/js/bootstrap.min.js"></script> -->
<script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="views/dist/js/adminlte.min.js"></script>
<script src="views/dist/plugins/iCheck/icheck.min.js"></script>

<script src="views/dist/js/jquery.Rut.js"></script>
<script src="views/dist/js/jquery.dataTables.min.js"></script>
<script src="views/dist/js/dataTables.bootstrap.js"></script>
<script src="views/dist/js/select2.min.js"></script>
<script src="views/dist/js/recursos.js"></script>

<script src="views/js/zonas.js"></script>
<script src="views/js/clientes.js"></script>
<script src="views/js/centros.js"></script>
<script src="views/js/equipos.js"></script>
<script src="views/js/usuario.js"></script>
<script src="views/js/productos.js"></script>
<script src="views/js/stock.js"></script>
<script src="views/js/marcas.js"></script>
<script src="views/js/terreno.js"></script>
<script src="views/js/taller.js"></script>
<script src="views/js/ordenes.js"></script>
<script src="views/js/pais.js"></script>
<script src="views/js/region.js"></script>
<script src="views/js/ciudad.js"></script>

<script src="views/js/despacho.js"></script>
<script src="views/js/usrCliente.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.11/dist/sweetalert2.all.min.js"></script>
</body>
</html>