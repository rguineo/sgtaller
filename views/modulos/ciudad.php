<?php 

  $respuesta = (new ctrCiudad)->ctrMostrarCiudades();

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Administrar Ciudades</h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Ciudad</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div id='page-wrapper'> 
        <div class='container-fluid'>
        <button type="button" class="btn bg-purple margin" data-toggle="modal" data-target="#modal-nueva-ciudad">
        <i class="fa fa-plus"></i>  Agregar Ciudad</button>
            <div class='row'>
                <div class='col-lg-offset-1 col-lg-10'>
                    <div class='table-responsive'>
                        <table class='table table-striped table-bordered table-hover tabla-pais table-dark' id='dataTables-example'>

                          <thead style='text-align: center; background: #eaeaea;'>
                              <tr>
                                  <th style='text-align: center;'> #</th>
                                  <th style='text-align: center;'> Ciudad</th>
                                  <th style='text-align: center;'> Region</th>
                                  <th style='text-align: center;'> Pais</th>
                                  <th style='text-align: center;'> Acciones</th>
                                  
                              </tr>
                          </thead>

                          <tbody>
                          <?php 
                           
                           foreach ($respuesta as $key => $value) {
                            echo "<tr>";
                              echo "<td style='text-align: center;'>".$value['id_ciudad']."</td>";
                              echo "<td>".$value['nombre_ciudad']."</td>";
                              echo "<td>".$value['nombre_region']."</td>";
                              echo "<td>".$value['nombre_pais']."</td>";                         
                              echo "<td>"; 
                              echo "<center>";
                                echo "<button type='button' idCiudad='".$value["id_ciudad"]."' class='btn btn-sm btn-primary btnEditarCiudad' href='#' data-toggle='modal' data-target='#modal-editar-ciudad' title='Editar'><i class='fa fa-edit'></i></button>";
                                echo "<button type='button' idCiudad='".$value["id_ciudad"]."' class='btn btn-sm btn-danger btnEliminarCiudad' href='#' title='Eliminar'>
                                <i class='fa fa-trash''></i></button>";
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