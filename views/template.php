<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php 

    $urlFrontEnd = Rutas::urlFrontEnd();
    $urlBackEnd = Rutas::urlBackEnd();

    ?>

    <link rel="stylesheet" href="<?php echo $urlFrontEnd; ?>views/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $urlFrontEnd; ?>views/css/estilos.css">
     
    <title>Duotek Services</title>
  </head>
  <body>
    
    <?php 

    include "modules/header.php";

    ?>

    <script src="<?php echo $urlFrontEnd; ?>views/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo $urlFrontEnd; ?>views/js/bootstrap.js"></script>
    <script src="<?php echo $urlFrontEnd; ?>views/js/vue.js"></script>
    <script src="<?php echo $urlFrontEnd; ?>views/js/header.js"></script>
  </body>
</html>