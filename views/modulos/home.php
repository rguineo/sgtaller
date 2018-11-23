<?php 
  $ordenes = (new ctrOrdenTrabajo);
  $respuesta = $ordenes->ctrTodasOrdenes();

  $entaller = (new ctrOrdenTrabajo);
  $countEq = $entaller->ctrContarEq();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestor de administración
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Aquí</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Equipos en Taller</span>
              <span class="info-box-number"><?php echo $countEq[0]; ?><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">X-Force</span>
              <span class="info-box-number">4</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Equipos Entregados</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Clientes</span>
              <span class="info-box-number">2.000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
        <div><br> <center>
          <a href="terrenos" class="btn btn-primary"><i class="fa fa-car"> Terreno</i></a>
          <a href="ingresoTaller" class="btn btn-success"><i class="fa fa-plus"> Ingreso Taller</i></a>
          <a href="ordenes" class="btn btn-warning"><i class="fa fa-play"> Ordenes Trabajo</i></a>
          <a href="despacho" class="btn btn-success"><i class="fa fa-truck"> Despacho</i></a>
          
          <br><br>
          </center>
        </div>
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Estado Equipos</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Fecha</th>
                    <th>Numero Serie</th>
                    <th>Equipos</th>
                    <th>Empresa</th>
                    <th>Estado</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        foreach ($respuesta as $key => $value) {
                          echo '<tr>
                                <td>'.$value["folio"].'</td>
                                <td>'.$value["fecha_orden"].'</td>
                                <td>'.$value["nSerie"].'</td>
                                <td>'.$value["nomEquipo"].'</td>
                                <td>'.$value["razon_social"].'</td>
                                ';

                          switch ($value['estado']) {
                            case '':
                              echo "<td><span class='label label-danger'>Nueva Orden</span></td>";
                              break;
                            case '1':
                              echo "<td><span class='label label-secondary'>Diagnostico</span></td>";
                              break;
                            case '2':
                              echo "<td><span class='label label-warning'>Espera OT</span></td>";
                              break;
                            case '3':
                              echo "<td><span class='label label-primary'>Reparacion</span></td>";
                              break;

                            case '4':
                              echo "<td><span class='label label-success'>Finalizado</span></td>";
                              break;
                            
                            case '5':
                              echo "<td><span class='label label-success'>Entregado</span></td>";
                              break;

                            default:

                              break;
                          }
                          echo '<tr>';
                        }


                    ?>

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <!-- <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Nuevo Orden</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Ver Equipos</a>
            </div> -->
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        
    </section>
    <!-- /.content -->
  </div>