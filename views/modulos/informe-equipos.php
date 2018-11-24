<?php 

$ordenes = (new ctrOrdenTrabajo);
$respuesta = $ordenes->ctrTodasOrdenes();

// $tecnicos = (new ctrTecnicos)->ctrTodosTecnicos();

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Informes Historial de Equipos </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Historial Equipos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid"><br>
      <div id='page-wrapper'> 
        <div class='container-fluid'>
        <!-- <button type="button" class="btn bg-purple margin" data-toggle="modal" data-target="#modal-nuevo-centro">
        <i class="fa fa-plus"></i>  Agregar Centro</button> -->
            <div class='row'>
                <div class='col-lg-offset-1 col-lg-10'>
                    <div class='table-responsive'>
                        <table class='table table-striped table-bordered table-hover tabla-usuarios table-dark' id='dataTables-example'>

                          <thead style='text-align: center; background: #eaeaea;'>
                              <tr>
                                  <th style='text-align: center;' width='8%'> Folio</th>
                                  <th style='text-align: center;' width='8%'> Fecha</th>
                                  <th style='text-align: center;'> Equipo</th>
                                  <th style='text-align: center;' width='10%'> N° Serie </th>	
                                  <th style='text-align: center;' width='20%'> Empresa </th>
                                  <th style='text-align: center;' width='15%'> Estado </th>
                                  <th style='text-align: center;' width='15%'> Acciones </th>
                              </tr>
                          </thead>

                          <tbody>
                          <?php 
                           
                           foreach ($respuesta as $key => $value) {
                            echo "<tr>";
                              echo "<td style='text-align: center;'>".$value['folio']."</td>";
                              echo "<td>".$value['fecha_orden']."</td>";
                              echo "<td>".$value['nomEquipo']."</td>";
                              echo "<td>".$value['nSerie']."</td>";
                              echo "<td>".$value['razon_social']."</td>";

                              switch ($value['estado']) {
                                case '':
                                  echo "<td style='text-align: center;color: red;'>Nueva Orden</td>";
                                  break;
                                case '1':
                                  echo "<td style='text-align: center;color: orange;'>Diagnostico</td>";
                                  break;
                                case '2':
                                  echo "<td style='text-align: center;color: black;'>Espera Aprobacion</td>";
                                  break;
                                case '3':
                                  echo "<td style='text-align: center;color: green;'>Reparacion</td>";
                                  break;

                                case '4':
                                  echo "<td style='text-align: center;color: blue;'>Finalizado</td>";
                                  break;
                                
                                case '5':
                                  echo "<td style='text-align: center;color: blue;'>Entregado</td>";
                                  break;

                                default:
  
                                  break;
                              }
                             
                              echo "<td>"; 
                              echo "<center>";
                                echo "<button type='button' idOrden='".$value["id_orden"]."' class='btn btn-sm btn-success btnVerOrden' href='#' title='Ver Orden'>
                                <i class='fa fa-search''></i></button>";
                              echo "</center>";
                              echo "</td>";
                            echo "</tr>";
                            }
                          ?> 


                            </tbody>
                      </table>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>