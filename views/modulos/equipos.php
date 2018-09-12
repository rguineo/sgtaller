<?php 

 $equipos = new ctrEquipo(); 
 $respuesta =  $equipos->ctrMostrarEquipo();

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Equipos     </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">TodosEquipos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div id='page-wrapper'>
        <div class='container-fluid'>
          <a href="nuevoEquipo" class="btn bg-purple margin">Agregar Equipo <i class="fa fa-user-plus"></i></a>
            <div class='row'>
                <div class='col-lg-offset-1 col-lg-10'>
                    <div class='table-responsive table_equipos'>
                        <table class='table table-striped table-bordered table-hover tabla-equipos' id='dataTables-example'>

                          <thead style='text-align: center; background: #eaeaea;'>
                              <tr>
                                  <th style='text-align: center;'> N° Serie</th>
                                  <th style='text-align: center;'> Marca Equipo</th>
                                  <th style='text-align: center;'> Modelo Equipo </th>	
                                  <th style='text-align: center;'> Empresa </th>
                                  <th style='text-align: center;'> Fecha Ingreso </th>
                                  <th style='text-aling: center;'> Nombre Equipo </th>
                                  <th style='text-align: center;'> Accion </th>
                              </tr>
                          </thead>

                          <tbody>
                          <?php 
                           
                           foreach ($respuesta as $key => $value) {
                            echo "<tr>";
                              echo "<td>".$value['numero_serie']."</td>";
                              echo "<td>".$value['nombre_equipo']."</td>"; 
                              echo "<td>"; 
                              echo "<center>";
                                echo "<a href='#' title='Editar'><i class='fa fa-edit fa-2x'></i></a>";
                                echo "<a href='#' data-toggle='modal' data-target='#delUsrModal' title='Eliminar'>
                                <i class='fa fa-remove fa-2x'style='color: red;'></i></a>";
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