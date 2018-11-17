<?php 

$terreno = (new ctrTerrenos);
$respTerreno = $terreno -> mostrarTerrenos();


?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Actividades en Terreno</h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Terrenos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div id='page-wrapper'>
        <div class='container-fluid'>
          <button type="button" class="btn bg-purple margin" data-toggle="modal" data-target="#modal-nuevo-terreno">
          <i class="fa fa-plus"></i> Nueva Actividad</button><br><br>
          <div class='row'>
            <div class='col-lg-offset-1 col-lg-10'>
              <div class='table-responsive table_productos'>
                        <table class='table table-striped table-bordered table-hover tabla-usuarios table-dark' id='dataTables-example'>

                          <thead style='text-align: center; background: #eaeaea;'>
                              <tr>
                                  <th style='text-align: center;'> Fecha</th>
                                  <th style='text-align: center;'> Empresa</th>
                                  <th style='text-align: center;'> Centro</th>
                                  <th style='text-align: center;'> Equipo </th>
                                  <th style='text-align: center;'> N° Serie </th>
                                  
                                  <th style='text-align: center;'> Accion </th>
                              </tr>
                          </thead>

                          <tbody>
                          <?php 
                           
                           foreach ($respTerreno as $key => $value) {
                            echo "<tr>";
                              echo "<td>".$value['fechaTerreno']."</td>";
                              echo "<td>".$value['razon_social']."</td>";
                              echo "<td>".$value['nombre']."</td>";
                              echo "<td>".$value['nomEquipo']."</td>"; 
                              echo "<td>".$value['nSerie']."</td>"; 
                              
                              echo "<td><center>"; 
                                echo "<button href='#' type='button' class='btnEditarTerreno btn btn-sm btn-primary' data-toggle='modal' data-target='#modal-editar-terreno' title='Editar Terreno' idTerreno=".$value["id_terreno"]." ><i class='fa fa-edit'></i></button>";
                                echo "<button href='#' type='button' class='btnVerTerreno btn btn-sm btn-success' id=".$value["id_terreno"]." title='Ver Terreno'><i class='fa fa-search'></i></button>";
                              echo "</center></td>";
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