<?php
require_once "controllers/productos.controller.php";
require_once "models/productos.modelo.php";
require_once "modales/modal-stock.php";

$respuesta = (new crtProductos)->ctrListarProductos();
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
  
<!--             <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-usuario">Agregar Usuario <i class="fa fa-plus"></i></button> -->
        <p><br><h3>Productos en Bodega</h3></p>
              <div class='row'>
                  <div class='col-lg-offset-1 col-lg-10'>
                      <div class='table-responsive table_productos'>
                          <table class='table table-striped table-bordered table-hover tabla-archivos table-dark' id='dataTables-example'>
                            <thead>
                              <tr>
                                <th width="35%">Producto</th>
                                <th width="35%">Descripci&oacute;n</th>
                                <th width="8%">Cantidad</th>
                                <th width="8%">$ Unitario</th>
                                <th width="8%">N° Cr&iacute;tico</th>
                                <th width="6%">Acci&oacute;n</th>
                              </tr>
                            </thead>
                            <tbody>

                              <?php 

                              foreach ($respuesta as $key => $value) {
                                echo '
                                  <tr>
                                    <td>'.$value["nombre"].'</td>
                                    <td>'.$value["detalle"].'</td>
                                    <td style="text-align: center">'.$value["cantidad"].'</td>
                                    <td style="text-align: center">$ '.number_format($value["precio"]).'</td>
                                    <td style="text-align: center">'.$value["ncritico"].'</td>


                                    <td width="100">
                                      <button class="btn btn-sm btn-info btnEgreso" idStock="'.$value["id"].'" data-toggle="modal" data-target="#modal-egreso-stock" title="Egreso Stock">
                                        <i class="fa fa-sign-out"></i>
                                      </button>';
                                      if ($value["cantidad"] <= $value["ncritico"]){
                                        echo '<i class="fa fa-eye" style="color: red; margin-left: 10px;"></i>';
                                      }

                                    echo '
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