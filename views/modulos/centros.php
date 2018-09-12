<?php 

 $respuesta = (new ctrCentros)->ctrMostrarCentros();

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>administrar centros     </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">administrarCentros</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div id='page-wrapper'> 
        <div class='container-fluid'>
        <a href="nuevoCentro" class="btn bg-purple margin">Agregar Centro <i class="fa fa-user-plus"></i></a>
            <div class='row'>
                <div class='col-lg-offset-1 col-lg-10'>
                    <div class='table-responsive table_productos'>
                        <table class='table table-striped table-bordered table-hover tabla-usuarios' id='dataTables-example'>

                          <thead style='text-align: center; background: #eaeaea;'>
                              <tr>
                                  <th style='text-align: center;'> Nombre Centro</th>
                                  <th style='text-align: center;'> Ubicación</th>
                                  <th style='text-align: center;'> Empresa</th>
                                  <th style='text-align: center;'> Ciudad </th>	
                                  <th style='text-align: center;'> Telefono </th>
                              </tr>
                          </thead>

                          <tbody>
                          <?php 
                           
                           foreach ($respuesta as $key => $value) {
                            echo "<tr>";
                              echo "<td>".$value['nombre']."</td>";
                              echo "<td>".$value['id_ciudad']."</td>";
                              echo "<td>".$value['id_comuna']."</td>";
                              echo "<td>".$value['id_empresa']."</td>";
                              echo "<td>".$value['url_ubicacion']."</td>";
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