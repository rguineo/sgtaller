<?php 

 $respuesta = (new ctrMarcas)->ctrMostrarMarcas();

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Administrar Marcas     </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">admMarca</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div id='page-wrapper'> 
        <div class='container-fluid'>
        <button type="button" class="btn bg-purple margin" data-toggle="modal" data-target="#modal-nueva-marca">
        <i class="fa fa-plus"></i>  Agregar Marca</button>
            <div class='row'>
                <div class='col-lg-offset-1 col-lg-10'>
                    <div class='table-responsive'>
                        <table class='table table-striped table-bordered table-hover tabla-usuarios table-dark' id='dataTables-example'>

                          <thead style='text-align: center; background: #eaeaea;'>
                              <tr>
                                  <th style='text-align: center;'> #</th>
                                  <th style='text-align: center;'> Marca</th>
                                  <th style='text-align: center;'> Acciones</th>
                                  
                              </tr>
                          </thead>

                          <tbody>
                          <?php 
                           
                           foreach ($respuesta as $key => $value) {
                            echo "<tr>";
                              echo "<td style='text-align: center;'>".$value['id_marca']."</td>";
                              echo "<td>".$value['marca']."</td>";
                              echo "<td>"; 
                              echo "<center>";
                                echo "<button type='button' idMarca='".$value["id_marca"]."' class='btn btn-sm btn-primary btnEditarMarca' href='#' data-toggle='modal' data-target='#modal-editar-marca' title='Editar'><i class='fa fa-edit'></i></button>";
                                echo "<button type='button' idMarca='".$value["id_marca"]."' class='btn btn-sm btn-danger btnEliminarMarca' href='#' title='Eliminar'>
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