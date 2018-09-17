<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Bodega</h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Bodega</li>
      </ol>
    </section>

    <section class="content container-fluid">
    <button type="button" class="btn bg-purple margin" data-toggle="modal" data-target="#modal-nuevo-bodega">
    <i class="fa fa-user-plus"></i>  Agregar Taller</button>
    <br><br>
      <div id='page-wrapper'>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-lg-offset-1 col-lg-10'>
                    <div class='table-responsive table_bodega'>
                        <table class='table table-striped table-bordered table-hover tabla-usuarios table-dark' id='dataTables-example'>

                          <thead style='text-align: center; background: #eaeaea;'>
                              <tr>
                                  <th style='text-align: center;'> Nombre Bodega</th>
                                  <th style='text-align: center;'> Direccion</th>
                                  <th style='text-align: center;'> Accion </th>
                              </tr>
                          </thead>

                          <tbody>
                          <?php 
                           
                           foreach ($respuesta as $key => $value) {
                            echo "<tr>";
                              echo "<td>".$value['nombre_bodega']."</td>";
                              echo "<td>".$value['direccion']."</td>";
                              echo "<td><center>"; 
                                echo "<button href='#' type='button' class='btnEditarCliente btn btn-primary' data-toggle='modal' data-target='#modal-editar-cliente' title='Editar' idCliente=".$value["id_empresa"]." ><i class='fa fa-edit'></i></button>";
                                echo "<button href='#' type='button' class='btnEliminarCliente btn btn-danger' id=".$value["id_empresa"]." title='Eliminar'><i class='fa fa-trash'></i></button>";
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