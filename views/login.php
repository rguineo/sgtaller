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
    <link rel="icon" type="image/png" sizes="16x16" href="views/img/favicon-16x16.png">

    <!--Estilos para login -->
    <link href="views/css/signin.css" rel="stylesheet">
    <title>Login - Duotek Services</title>
  </head>
  <body class="text-center">
    
  <form class="form-signin" >
      <img class="mb-4" src="views/img/logindt.png" alt="" width="300" height="60">
      <h1 class="h3 mb-3 font-weight-normal sing-titulo">Ingrese sus credenciales</h1>
      <label for="inputEmail" class="sr-only">e-mail</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2020</p>
    </form>

    <script src="<?php echo $urlFrontEnd; ?>views/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo $urlFrontEnd; ?>views/js/bootstrap.js"></script>
    <script src="<?php echo $urlFrontEnd; ?>views/js/vue.js"></script>
    <script src="<?php echo $urlFrontEnd; ?>views/js/header.js"></script>
  </body>
</html>