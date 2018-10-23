<?php
require_once "controllers/productos.controller.php";
require_once "models/productos.modelo.php";


$respuesta = (new crtProductos)->ctrListarTodosProductos();
// $grafico = (new ControllerProducto)->ctrCantidadProducto();

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestor de Administraci&oacute;n
        <small> [ Stock Productos ]</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>

      </ol>
    </section>

    <!-- Main content --> 
    <section class="content container-fluid">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-producto">Agregar Producto <i class="fa fa-plus"></i></button>
        <p><br><h3>Productos</h3></p>
              <div class='row'>
                  <div class='col-lg-offset-1 col-lg-10'>
                      <div class='table-responsive table_productos'>
                          <table class='table table-striped table-bordered table-hover tabla-archivos table-dark' id='dataTables-example'>
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Descripci&oacute;n</th>
                                <th scope="col">Unidad</th>
                                <th scope="col">BarCode</th>
                                <th scope="col">Precio</th>

                                <th scope="col">Acci&oacute;n</th>
                            </thead>
                            <tbody>

                              <?php 

                              foreach ($respuesta as $key => $value) {
                                echo '
                                  <tr>
                                    <td><button class="btn btn-primary" id="btn-stock" idProducto ="'.$value["id"].'"><i class="fa fa-sign-in"></i></button></td>
                                    <td>'.$value["nombre"].'</td>
                                    <td>'.$value["detalle"].'</td>
                                    <td style="text-align: center">'.$value["umedida"].'</td>
                                    <td style="text-align: center">'.$value["barcode"].'</td>
                                    <td style="text-align: center">$ '.number_format($value["precio"]).'</td>


                                    <td width="100">
                                      <button class="btn btn-sm btn-info btnEditarPro" idProducto="'.$value["id"].'" data-toggle="modal" data-target="#modal-editar-producto">
                                        <i class="fa fa-edit fa-2x"></i>
                                      </button>

                                      <button class="btn btn-sm btn-warning btnEliminarProd" idProducto="'.$value["id"].'">
                                        <i class="fa fa-trash fa-2x"></i>
                                      </button>

                                    </td>
                                  </tr>
                                ';
                              }
                              ?>
                            </tbody>
                          </table>
                      </div>
                  </div>
              </div>


    </section>
    <!-- /.content -->
  </div>