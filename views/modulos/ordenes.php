<?php 

$ordenes = (new ctrOrdenTrabajo);
$respuesta = $ordenes->ctrTodasOrdenes();

// $tecnicos = (new ctrTecnicos)->ctrTodosTecnicos();

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Administrar Ordenes Trabajo</h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Ordenes Trabajo</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
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
                                  <th style='text-align: center;'> Folio</th>
                                  <th style='text-align: center;'> Fecha</th>
                                  <th style='text-align: center;'> Equipo</th>
                                  <th style='text-align: center;'> N° Serie </th>	
                                  <th style='text-align: center;'> Empresa </th>
                                  <th style='text-align: center;'> Estado </th>
                          
                                  <th style='text-align: center;'> Acciones </th>
                              </tr>
                          </thead>

                          <tbody>
                          <?php 
                           
                           foreach ($respuesta as $key => $value) {
                            echo "<tr>";
                              echo "<td>".$value['folio']."</td>";
                              echo "<td>".$value['fecha_orden']."</td>";
                              echo "<td>".$value['nomEquipo']."</td>";
                              echo "<td>".$value['nSerie']."</td>";
                              echo "<td>".$value['razon_social']."</td>";

                              switch ($value['estado']) {
                                case '':
                                  echo "<td style='color: red;'>Nueva Orden</td>";
                                  break;
                                case '1':
                                  echo "<td style='color: orange;'>Diagnostico</td>";
                                  break;
                                case '2':
                                  echo "<td style='color: black;'>Reparacion</td>";
                                  break;
                                case '3':
                                  echo "<td style='color: green;'>Finalizado</td>";
                                  break;

                                case '4':
                                  echo "<td style='color: blue;'>Despachado</td>";
                                  break;
                                default:
  
                                  break;
                              }
                             
                              echo "<td>"; 
                              echo "<center>";
                                echo "<button type='button' idOrden='".$value["id_orden"]."' class='btn btn-sm btn-primary btnEditarOrden' href='#' data-toggle='modal' data-target='#modal-editar-orden' title='Editar'><i class='fa fa-edit'></i></button>";
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