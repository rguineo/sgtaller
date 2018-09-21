<?php 

 $todoTaller = new ctrTaller(); 
 $respuesta =  $todoTaller->ctrTodoTaller();

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Taller</h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Taller</li>
      </ol>
    </section>

    <section class="content container-fluid">
    <button type="button" class="btn bg-purple margin" data-toggle="modal" data-target="#modal-nuevo-taller">
    <i class="fa fa-user-plus"></i>  Agregar Taller</button>
    <br><br>
      <div id='page-wrapper'>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-lg-offset-1 col-lg-10'>
                    <div class='table-responsive table_taller'>
                        <table class='table table-striped table-bordered table-hover tabla-usuarios table-dark' id='dataTables-example'>

                          <thead style='text-align: center; background: #eaeaea;'>
                              <tr>
                                  <th style='text-align: center;'> Nombre Taller</th>
                                  <th style='text-align: center;'> Direccion</th>
                                  <th style='text-align: center;'> Ciudad</th>
                                  <th style='text-align: center;'> Accion </th>
                              </tr>
                          </thead>

                          <tbody>
                          <?php 
                           
                           foreach ($respuesta as $key => $value) {
                            echo "<tr>";
                              echo "<td>".$value['nombre_taller']."</td>";
                              echo "<td>".$value['direccion_taller']."</td>";
                              echo "<td>".$value['ciudad_taller']."</td>";
                              echo "<td><center>"; 
                                echo "<button href='#' type='button' class='btnEditarTaller btn btn-primary' data-toggle='modal' data-target='#modal-editar-taller' title='Editar' idCliente=".$value["id_taller"]." ><i class='fa fa-edit'></i></button>";
                                echo "<button href='#' type='button' class='btnEliminarTaller btn btn-danger' id=".$value["id_taller"]." title='Eliminar'><i class='fa fa-trash'></i></button>";
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