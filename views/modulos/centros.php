<?php 

 $respuesta = (new ctrCentros)->ctrMostrarCentros();

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Administrar Centros     </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">administrarCentros</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div id='page-wrapper'> 
        <div class='container-fluid'>
        <button type="button" class="btn bg-purple margin" data-toggle="modal" data-target="#modal-nuevo-centro">
        <i class="fa fa-plus"></i>  Agregar Centro</button>
            <div class='row'>
                <div class='col-lg-offset-1 col-lg-10'>
                    <div class='table-responsive'>
                        <table class='table table-striped table-bordered table-hover tabla-usuarios table-dark' id='dataTables-example'>

                          <thead style='text-align: center; background: #eaeaea;'>
                              <tr>
                                  <th style='text-align: center;'> Nombre Centro</th>
                                  <th style='text-align: center;'> Ubicación</th>
                                  <th style='text-align: center;'> Empresa</th>
                                  <th style='text-align: center;'> Ciudad </th>	
                                  <th style='text-align: center;'> Telefono </th>
                                  <th style='text-align: center;'> Acciones </th>
                              </tr>
                          </thead>

                          <tbody>
                          <?php 
                           
                           foreach ($respuesta as $key => $value) {
                            echo "<tr>";
                              echo "<td>".$value['nombre']."</td>";
                              echo "<td><center><a href=".$value["url_ubicacion"]." target='_blank'><i class='fas fa-map-marker-alt fa-2x'></i></center></td>";
                              echo "<td>".$value['razon_social']."</td>";
                              echo "<td>".$value['nombre_ciudad']."</td>";
                              echo "<td>".$value['telefono']."</td>";
                              echo "<td>"; 
                              echo "<center>";
                                echo "<button type='button' idCentro='".$value["id_centro"]."' class='btn btn-primary btnEditarCentro' href='#' data-toggle='modal' data-target='#modal-editar-centro' title='Editar'><i class='fa fa-edit'></i></button>";
                                echo "<button type='button' idCentro='".$value["id_centro"]."' class='btn btn-danger btnEliminarCentro' href='#' title='Eliminar'>
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